'use strict';

const { 
    home_url,
    nonce,
    tradingview_dataset,
} = dataset;

console.log(dataset)

tradingview_dataset.map((e) => {

    new TradingView.widget({
        "width": e.width,
        "height": e.height,
        "symbol": e.symbol,
        "interval": e.interval,
        "timezone": e.timezone,
        "theme": e.theme,
        "style": e.style,
        "locale": e.locale,
        "toolbar_bg": e.toolbar_bg,
        "enable_publishing": e.enable_publishing,
        "hide_legend": e.hide_legend,
        "allow_symbol_change": e.allow_symbol_change,
        "show_popup_button": e.show_popup_button,
        "popup_width": e.popup_width,
        "popup_height": e.popup_height,
        "container_id": e.container_id,
    });
    
})

const toggle = () => {
    console.log('tmp')
    const item = document.getElementById('chart-container');
    item.classList.toggle('none')
};
