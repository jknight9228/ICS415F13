function tagCount(){
	var userInput = $("#container").find("input[name='url']").val();
	
	$.get(userInput, function(data) 
	{
		var table = "<table border='1' id='table'>";
		$("#table").remove();
		table += "<thead><tr><td>Tag</td><td>Count</td></tr></thead>";
   		table += "<tr><td>li" +"</td><td>" + ( $(data).find("li").length ) + "</td></tr>";
   		table += "<tr><td>p" +"</td><td>" + ( $(data).find("p").length ) + "</td></tr>";
   		table += "<tr><td>a" +"</td><td>" + ( $(data).find("a").length ) + "</td></tr>";
   		table += "<tr><td>h1" +"</td><td>" + ( $(data).find("h1").length ) + "</td></tr>";
   		table += "<tr><td>h2" +"</td><td>" + ( $(data).find("h2").length ) + "</td></tr>";
   		table += "<tr><td>h3" +"</td><td>" + ( $(data).find("h3").length ) + "</td></tr>";
   		table += "<tr><td>h4" +"</td><td>" + ( $(data).find("h4").length ) + "</td></tr>";
   		table += "<tr><td>div" +"</td><td>" + ( $(data).find("div").length ) + "</td></tr>";
   		table += "<tr><td>img" +"</td><td>" + ( $(data).find("img").length ) + "</td></tr>";
   		table += "<tr><td>header" +"</td><td>" + ( $(data).find("header").length ) + "</td></tr>";
   		table += "<tr><td>script" +"</td><td>" + ( $(data).find("script").length ) + "</td></tr>";
   		table += "</table>";
		$("#container").append(table);
	});
	return false;
}

function scriptFind()
{
	var userInput = $("#container").find("input[name='url']").val();
	
	$.get(userInput, function(data) 
	{
		var text = "<p id='script'>";
		$("#script").remove();
		var script1 = $(data).find("script").attr("src");
		text += "Scripts are :";
		text += script1 + "<br>" + "</p>";
		$("#bottom").append(text);
	});
	return false;
}
