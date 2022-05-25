
    $('#dominio-atual-legend').text(window.location.origin + '/api/legends');
    $('#dominio-atual-weapon').text(window.location.origin + '/api/weapons');
    $('#dominio-atual-metadata').text(window.location.origin + '/api/metadata');
    $('#dominio-atual-legend-json').text(window.location.origin + '/api/legends?name=mirage');

    $.ajax({
        url: "/api/legends?name=mirage",
        method: "GET"
    }).done(function(response) {
        let jsonLegends = JSON.stringify(response, null, 4);

        $('#json-legend').val(jsonLegends);
    });