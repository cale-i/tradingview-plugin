'use strict';

const { 
    home_url,
    nonce,
    tradingview_dataset,
} = dataset;

console.log(dataset)

// tradingview_dataset.map((e) => {

//     new TradingView.widget({
//         "width": e.width,
//         "height": e.height,
//         "symbol": e.symbol,
//         "interval": e.interval,
//         "timezone": e.timezone,
//         "theme": e.theme,
//         "style": e.style,
//         "locale": e.locale,
//         "toolbar_bg": e.toolbar_bg,
//         "enable_publishing": e.enable_publishing,
//         "hide_legend": e.hide_legend,
//         "allow_symbol_change": e.allow_symbol_change,
//         "show_popup_button": e.show_popup_button,
//         "popup_width": e.popup_width,
//         "popup_height": e.popup_height,
//         "container_id": e.container_id,
//     });
    
// })

const toggle = () => {
    const item = document.getElementById('chart-container');
    const toggleButton = document.getElementById('toggle-button');
    item.classList.toggle('is-show')
    if (item.className == 'is-show') {
        toggleButton.innerText = 'チャートを開く'
    } else {
        toggleButton.innerText = 'チャートを閉じる'
    }
};

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
});

// タブメニュー設定
if (window.matchMedia("(min-width: 768px)").matches) {
    // タブレット & PC
    console.log('PC');
    // タブエリア削除
    const el = document.getElementById('tab-menu');
    el.remove();

} else {
    // モバイル
    console.log('mobile')

    // タブエリア作成
    document.addEventListener('DOMContentLoaded', () => {
        const tabTriggers = document.querySelectorAll('.tab-trigger');
        const tabTargets = document.querySelectorAll('.tab-target');
        console.log(tabTriggers)
        console.log(tabTargets)

        for (let i = 0; i < tabTriggers.length; i++) {
            // タブメニュークリック時
            tabTriggers[i].addEventListener('click', (e) => {
                // クリックされた要素を取得
                let currentMenu = e.currentTarget;
                console.log('currentMenu')
                // ターゲット要素(タブメニューdata属性値==ターゲットid)を取得
                let currentContent = document.getElementById(currentMenu.dataset.id);

                // タブメニューの'is-active'クラスを削除(初期化)
                for (let i = 0; i < tabTriggers.length; i++) {
                    tabTriggers[i].classList.remove('is-active');
                };
                // クリックしたタブに'is-active'クラスを追加
                currentMenu.classList.add('is-active');
                
                // タブコンテンツを非アクティブ化する(初期化)
                for (let i = 0; i < tabTargets.length; i++) {
                    tabTargets[i].classList.remove('is-active');

                    // 対象コンテンツを表示させる
                    if (currentContent !== null) {
                        currentContent.classList.add('is-active');
                    };
                };
            });
        };
    });
};
