function getData(url, data={}) {
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

function storeData(url, data={}, message="Store Success") {
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

function updateData(url, data={}, message="Update Success") {
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

function deleteData(url, data={}, message="Delete Data Success") {
    $.ajax({
        type: "get",
        url: url,
        data: data,
        dataType: "json",
        success: function (response) {
            return response;
        }
    });
}