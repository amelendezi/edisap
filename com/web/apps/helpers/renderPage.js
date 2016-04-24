define(['jquery'], function($){
    
    var renderHtml = function(id, html) {
        $(id).html(html);
    }
    
    // RenderPage object
    var renderPage = {
        name: "renderPageFunctions",
        renderHeader: function() {
            renderHtml('#headerPanel', "<div class='panel-heading'><h4 class='panel-title'><span>Edisap.com</span></h4></div>");
        },
        renderContent: function() {
            renderHtml('#contentPanel', "<div class='panel-heading'><h4 class='panel-title'><span>Building & Apartments View</span></h4></div>");
        },
        renderFooter: function() {
            renderHtml('#footerPanel', "<div class='panel-heading'><h4 class='panel-title'><span>Copyright (C) 2016</span></h4></div>");
        }
    };
    
    return renderPage;
});