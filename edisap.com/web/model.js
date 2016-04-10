// View Model Specification ----------------------------------------------------
function TableViewModel() {
    this.apartments = ko.observableArray();

    this.updateApartments = function (newApartment) {
        this.apartments(newApartment);
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
        url: "http://localhost/edisap/edisap.com/server/queries/srvGetApartments_Stub.php",
        type: "post",
        dataType: "json",
        data: {},
        error: function (xhr, status, error) {
            alert(xhr.responseText);
        },
        success: function (apartments) {            
            tableViewModel.updateApartments(apartments);
        }
    });
}