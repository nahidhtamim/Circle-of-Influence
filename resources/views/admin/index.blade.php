@extends('layouts.admin')

@section('title')
Dashboard - Circle of Influence
@endsection

@section('contents')

<style>

.card-body {
        height: 100%;
        background: #e6e7ee;
        overflow: hidden;
        margin: 0px;
    }

    .faded {
        opacity: 0.1;
        transition: 0.3s opacity;
    }

circle:hover{
  fill: aquamarine
}

    .highlight {
        opacity: 1;
    }
</style>




<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-chart card-header-primary">
          <div class="ct-chart text-center" id="dailySalesChart">
              <h3>A Graphical View of the list of User's Influencers</h3>
          </div>
        </div>
        <div class="card-body">
          <svg id="svg"></svg>
        </div>
      </div>
    </div>
</div>



@if(isset($nodes) && !empty($nodes) && isset($links) && !empty($links))

    <script>
        var graph = 
      {
        "nodes": <?= $nodes ?>,
        "links": <?= $links ?>, 
      };

        var svg = d3.select("svg")
            .attr("class", "canvas")
            .attr("width", window.innerWidth)
            .attr("height", window.innerHeight)
            .call(d3.zoom().on("zoom", function (event) {
                svg.attr("transform", event.transform)
            }))
            .append("g")

        // append markers to svg
        svg.append("defs").append("marker")
            .attr("id", "arrowhead")
            .attr("viewBox", "-0 -5 10 10")
            .attr("refX", 8)
            .attr("refY", 0)
            .attr("orient", "auto")
            .attr("markerWidth", 50)
            .attr("markerHeight", 50)
            .attr("xoverflow", "visible")
            .append("svg:path")
            .attr("d", "M 0,-1 L 2 ,0 L 0,1")
            .attr("fill", "black")
            .style("stroke", "none")

        var linksContainer = svg.append("g").attr("class", linksContainer)
        var nodesContainer = svg.append("g").attr("class", nodesContainer)

        var force = d3.forceSimulation()
            .force("link", d3.forceLink().id(function (d) {
                return d.id
            }).distance(80))
            .force("charge", d3.forceManyBody().strength(-100))
            .force("center", d3.forceCenter(window.innerWidth / 2, window.innerHeight / 2))
            .force("collision", d3.forceCollide().radius(90))

        initialize()

        function initialize() {

            link = linksContainer.selectAll(".link")
                .data(graph.links)
                .join("line")
                .attr("class", "link")
                .attr('marker-end', 'url(#arrowhead)')
                .style("display", "block")
                .style("stroke", "black")
                .style("stroke-width", 1)

            linkPaths = linksContainer.selectAll(".linkPath")
                .data(graph.links)
                .join("path")
                .style("pointer-events", "none")
                .attr("class", "linkPath")
                .attr("fill-opacity", 1)
                .attr("stroke-opacity", 1)
                .attr("id", function (d, i) { return "linkPath" + i })
                .style("display", "block")

            linkLabels = linksContainer.selectAll(".linkLabel")
                .data(graph.links)
                .join("text")
                .style("pointer-events", "none")
                .attr("class", "linkLabel")
                .attr("id", function (d, i) { return "linkLabel" + i })
                .attr("font-size", 16)
                .attr("fill", "black")
                .text("")

            linkLabels
                .append("textPath")
                .attr('xlink:href', function (d, i) { return '#linkPath' + i })
                .style("text-anchor", "middle")
                .style("pointer-events", "none")
                .attr("startOffset", "50%")
                .text(function (d) { return d.type })

            node = nodesContainer.selectAll(".node")
                .data(graph.nodes, d => d.id)
                .join("g")
                .attr("class", "node")
                .call(d3.drag()
                    .on("start", dragStarted)
                    .on("drag", dragged)
                    .on("end", dragEnded)
                )

            node.selectAll("circle")
                .data(d => [d])
                .join("circle")
                .attr("r", 30)
                .style("fill", "whitesmoke")
                .on("mouseenter", mouseEnter)
                .on("mouseleave", mouseLeave)

            node.selectAll("text")
                .data(d => [d])
                .join("text")
                .style("class", "icon")
                .attr("font-family", "FontAwesome")
                .attr("dominant-baseline", "central")
                .attr("text-anchor", "middle")
                .attr("font-size", 20)
                .attr("fill", "black")
                .attr("pointer-events", "none")
                .attr("dy", "-1em")
                .text(function (d) {
                    return d.name
                })
            node.append("text")
                .attr("dominant-baseline", "central")
                .attr("text-anchor", "middle")
                .attr("font-size", 13)
                .attr("fill", "black")
                .attr("pointer-events", "none")
                .attr("dy", "0.5em")
                .text(function (d) {
                    return d.id
                })

            force
                .nodes(graph.nodes)
                .on("tick", ticked);

            force
                .force("link")
                .links(graph.links)
        }

        function mouseEnter(event, d) {
            const selNodes = node.selectAll("circle")
            const selLink = link
            const selLinkLabel = linkLabels
            const selText = node.selectAll("text")
            const related = []
            const relatedLinks = []

            related.push(d)
            force.force('link').links().forEach((link) => {
                if (link.source === d || link.target === d) {
                    relatedLinks.push(link)
                    if (related.indexOf(link.source) === -1) { related.push(link.source) }
                    if (related.indexOf(link.target) === -1) { related.push(link.target) }
                }
            })
            selNodes.classed('faded', true)
            selNodes.filter((dNodes) => related.indexOf(dNodes) > -1)
                .classed('highlight', true)
            selLink.classed('faded', true)
            selLink.filter((dLink) => dLink.source === d || dLink.target === d)
                .classed('highlight', true)
            selLinkLabel.classed('faded', true)
            selLinkLabel.filter((dLinkLabel) => dLinkLabel.source === d || dLinkLabel.target === d)
                .classed('highlight', true)
            selText.classed('faded', true)
            selText.filter((dText) => related.indexOf(dText) > -1)
                .classed('highlight', true)
            
            force.alphaTarget(0.0001).restart()
        }

        function mouseLeave(event, d) {
            const selNodes = node.selectAll("circle")
            const selLink = link
            const selLinkLabel = linkLabels
            const selText = node.selectAll("text")

            selNodes.classed('faded', false)
            selNodes.classed('highlight', false)
            selLink.classed('faded', false)
            selLink.classed('highlight', false)
            selLinkLabel.classed('faded', false)
            selLinkLabel.classed('highlight', false)
            selText.classed('faded', false)
            selText.classed('highlight', false)
            
            force.restart()
        }

        function ticked() {
            // update link positions
            link
                .attr("x1", function (d) {
                    return d.source.x;
                })
                .attr("y1", function (d) {
                    return d.source.y;
                })
                .attr("x2", function (d) {
                    return d.target.x;
                })
                .attr("y2", function (d) {
                    return d.target.y;
                });

            // update node positions
            node
                .attr("transform", function (d) {
                    return "translate(" + d.x + ", " + d.y + ")";
                });

            linkPaths.attr('d', function (d) {
                return 'M ' + d.source.x + ' ' + d.source.y + ' L ' + d.target.x + ' ' + d.target.y;
            });

            linkLabels.attr('transform', function (d) {
                if (d.target.x < d.source.x) {
                    var bbox = this.getBBox();

                    rx = bbox.x + bbox.width / 2;
                    ry = bbox.y + bbox.height / 2;
                    return 'rotate(180 ' + rx + ' ' + ry + ')';
                }
                else {
                    return 'rotate(0)';
                }
            });

        }

        function dragStarted(event, d) {
            if (!event.active) force.alphaTarget(0.3).restart();
            d.fx = d.x;
            d.fy = d.y;

            PosX = d.x
            PosY = d.y
        }

        function dragged(event, d) {
            d.fx = event.x;
            d.fy = event.y;
        }

        function dragEnded(event, d) {
            if (!event.active) force.alphaTarget(0);
            d.fx = undefined;
            d.fy = undefined;
        }

    </script>

@else
<div class="card text-center">
    <div class="card-header">
      <h3>No data avalaible</h3>
    </div>
 </div>

@endif

@endsection
