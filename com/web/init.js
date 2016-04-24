require(['config'], function() {       
    require(['renderPage'], function(renderPage){        
        renderPage.renderHeader();
        renderPage.renderContent();
        renderPage.renderFooter();
    });    
});