google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);
function drawChart() {
    var data = google.visualization.arrayToDataTable([
        ['Task', 'Votes'],
        ['Candidato 1', 25],
        ['Candidato 2', 40],
        ['Candidato 3', 33],
    ]);
    var options = {'title':'Votos', 'width':300, 'height':300};
    var chart = new google.visualization.PieChart(document.getElementById('piechart'));

    chart.draw(data, options);
}