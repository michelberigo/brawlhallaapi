$('#dominio-atual-legend').text('https://' + window.location.hostname + '/api/legends');
$('#dominio-atual-weapon').text('https://' + window.location.hostname + '/api/weapons');
$('#dominio-atual-metadata').text('https://' + window.location.hostname + '/api/metadata');
$('#dominio-atual-legend-json').text('https://' + window.location.hostname + '/api/legends?name=mirage');

$.ajax({
    url: "/api/legends?name=mirage",
    method: "GET"
}).done(function(response) {
    let jsonLegends = JSON.stringify(response, null, 4);

    $('#json-legend').val(jsonLegends);
});