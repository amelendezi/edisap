// View Model Specification ----------------------------------------------------
function TableViewModel() {
    this.apartments = ko.observableArray();

    this.updateApartments = function (apartments) {
        this.apartments(apartments);
    };
    
    this.clear = function() {
      this.apartments([]);  
    };
}

// Domain Object Model ---------------------------------------------------------
var tableViewModel = new TableViewModel();

// Knockout Bindings -----------------------------------------------------------
ko.applyBindings(tableViewModel);

// Event Handlers --------------------------------------------------------------
function srvRequestGetApartments() {
    $.ajax({
        url: "http://localhost/edisap/com/server/httpQueryHandler.php",
        type: "get",
        dataType: "json",
        data: { query: "GetApartmentsQuery", params: [] },
        error: function (xhr, status, error) {
            alert(xhr.responseText);
        },
        success: function (apartments) {            
            tableViewModel.updateApartments(apartments);
        }
    });
}