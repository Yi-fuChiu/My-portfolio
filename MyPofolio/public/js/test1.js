var container = document.getElementById("svgcontainer");
	 	   var width = container.offsetWidth;
         var height = container.offsetHeight;
         var animationTime = 800;
         var length = 100;
         var offset = 40;
         var bgColor = "#ffc107";
         var strokeColor = "#bb4d00";


         var sin60 = Math.sin(Math.PI/3);
         var cos60 = Math.cos(Math.PI/3);

         var maxHeight = (length+offset*2)*sin60;
         var minHeight = offset * sin60;
         var originalHeight = length * sin60;

         var startX=width/2,startY=(height/2);

         var gWidth = length+offset*2;
         var gHeight = (length+offset*2) * sin60


         var p=[
         	{x: startX - (offset/2),y: startY - (2*maxHeight/3) + minHeight},
         	{x: startX + (length/2),y: startY + (maxHeight/3)},
         	{x: startX - (length/2),y: startY + (maxHeight/3)},
         	{x: startX + offset/2 ,y: startY - (2*maxHeight/3) + minHeight},
         	{x: startX + (length/2) + (offset/2),y: startY + (maxHeight/3) - minHeight},
         	{x: startX - (length/2) - (offset/2),y: startY + (maxHeight/3) - minHeight},
            {x: startX - (offset/2),y: startY - (2*maxHeight/3) + minHeight}
         ]
         var lines=[];
         var svg = d3.select("#svgcontainer")
            .append("svg")
            .attr("width", width)
            .attr("height", height)

         var g = svg.append("g")
         		.attr("width",width)
         		.attr("height",width)


         // g.append("circle")
         //    .attr("cx",width/2)
         //    .attr("cy",height/2)
         //    .attr("r",10)
         //    .attr("fill","red");

         animateLine(0);
         rotate(svg,0);

         function animateLine(i){
            var line;
            var point1 = p[i];
            var point2 = p[i+1];

            if(!lines[i]){
               var tLine = g.append("line")
                  .attr("x1", point1.x)
                  .attr("y1", point1.y)
                  .attr("x2", point1.x)
                  .attr("y2", point1.y)
                  .style("stroke", strokeColor)
                  .style("stroke-width", 5);
               lines[i] = tLine;
               line = tLine;
            }else{
               line = lines[i];
               line.attr("x1", point1.x)
                  .attr("y1", point1.y)
                  .attr("x2", point1.x)
                  .attr("y2", point1.y)
            }

            line.transition()
              .duration(animationTime/2)
              .attr("x2", point2.x)
              .attr("y2", point2.y)
              .on("end",function(){
                  animateLine((i+1)%(p.length - 1))
              })

            line.transition()
                 .duration(animationTime/2)
                 .delay((animationTime*1.7))
                 .attr("x1", point2.x)
                 .attr("y1", point2.y)
         }

         function rotate(svg,i){
            svg.transition()
               .duration(animationTime / 2)
               .delay((animationTime / 2))
               .attr('transform', 'rotate('+i*60+')')
               .on("end",function(){ rotate(svg,i+1) });
         }