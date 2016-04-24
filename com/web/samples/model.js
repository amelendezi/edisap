// View Model Specification ----------------------------------------------------
function ViewModel(building, apartments)
{
    this.building = building;
    this.apartments = apartments;
    
    this.clear = function() {
        this.building.clear();
        this.apartments.clear();
    }
}

function BuildingViewModel() {        
    
    // Model definition
    this.name = ko.observable("Building Name");    
    
    // Model behavior
    this.update = function(building) {
        this.name(building.name);        
    }    
    
    this.clear = function() {
        this.name("... no building chosen ...");
    }
}

function ApartmentsViewModel() {        
    
    // Model definition        
    this.apartments = ko.observableArray();
        
    // Update Apartments Function
    this.update = function (apartments) {
        this.apartments(apartments);
    };
    
    // Clear Apartment List
    this.clear = function() {
      this.apartments([]);  
    };
}

// Domain Object Model ---------------------------------------------------------
var buildingViewModel = new BuildingViewModel();
var apartmentsViewModel = new ApartmentsViewModel();
var viewModel = new ViewModel(buildingViewModel, apartmentsViewModel);

// Knockout Bindings -----------------------------------------------------------
ko.applyBindings(viewModel);

// Services Request ------------------------------------------------------------
function srvRequestBuilding(buildingId) {
    $.ajax({
        url: "http://localhost/edisap/com/server/httpQueryHandler.php",
        type: "POST",
        dataType: "json",
        data: { 
            query: "GetBuildingQuery",
            params: {'instanceId': buildingId}
        },
        error: function (xhr, status, error) {
            handleError(xhr, status, error);
        },
        success: function (building) {            
            srvRequestGetApartments(building);
        }
    });
}

function srvRequestGetApartments(building) {
    $.ajax({
        url: "http://localhost/edisap/com/server/httpQueryHandler.php",
        type: "POST",
        dataType: "json",
        data: {
            query: "GetApartmentsQuery",
            params: {'building_instanceId': building.instanceId}
        },
        error: function (xhr, status, error) {
            handleError(xhr, status, error);
        },
        success: function (apartments) {
            updateTableView(building, apartments);
        }
    });
}

// Event Handlers --------------------------------------------------------------
function serverRequestBuilding1() {    
    srvRequestBuilding("0000-0000-0001");
}

function serverRequestBuilding2() {    
    srvRequestBuilding("0000-0000-0002");
}

// Update View Functions -------------------------------------------------------
function updateTableView(building, apartments) {    
    viewModel.building.update(building);
    viewModel.apartments.update(apartments);
}

// Helper Functions ------------------------------------------------------------
function handleError(xhr, status, error) {
    document.body.innerHTML = "<h3>You suck dammit!</h3>" + xhr.responseText;    
}