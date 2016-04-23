// View Model Specification ----------------------------------------------------
function TableViewModel() {        
    this.apartments = ko.observableArray();    
    
    // Update Apartments Function
    this.updateApartments = function (apartments) {
        this.apartments(apartments);
    };
    
    // Clear Apartment List
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
        type: "POST",
        dataType: "json",
        data: { 
            query: "GetApartmentsQuery",
            params: {'building_instanceId':'0000-0000-0001'}
        },
        error: function (xhr, status, error) {
            alert(xhr.responseText);
        },
        success: function (apartments) {            
            tableViewModel.updateApartments(apartments);
        }
    });
}