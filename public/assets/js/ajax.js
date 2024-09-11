function getData(url, data) {
    $.ajax({
        type: "GET",
        url: url,
        data: data,
        dataType: "json",
        success: function (response) {
            return response;
        }
    });
}

function postData(url, data) {
    $.ajax({
        type: "POST",
        url: utl,
        data: data,
        dataType: "json",
        success: function (response) {
            return response;
        }
    });
}

function updateData(url, data) {
    $.ajax({
        type: "PUT",
        url: utl,
        data: data,
        dataType: "json",
        success: function (response) {
            return response;
        }
    });
}