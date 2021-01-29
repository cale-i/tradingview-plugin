<?php
//==================================================
//	TradingView チャート表示ウィジェット
//==================================================
class TradingViewWidget extends WP_Widget
{

    // コンストラクタでウィジェットを登録
    function __construct()
    {
        parent::__construct(
            'widget_tradingview',    //ウィジェットID
            'TradingView-Widget',           //ウィジェット名
            array('description' => 'TradingView提供のチャートを表示するウィジェット')   //ウィジェットの概要
        );
    }

    public function widget($args, $instance)
    {
        echo $args['before_widget'];

        // ウィジェットの内容

        if (!empty($instance['title'])) {
            echo '<p class="tradingview_title strong dfont center">' . $instance['title'] . '</p>';
        }


        // $first_id = 'tradingview_' . (string)rand(10000, 99999);
        $tradingview_dataset = [
            [
                'container_id' => 'tradingview_' . '10000',
                'width' => 300,
                'height' => 400,
                'symbol' => 'FX:USDJPY',
                'interval' => 'D',
                'timezone' => 'Asia/Tokyo',
                'theme' => 'light',
                'style' => '1',
                'locale' => 'ja',
                "toolbar_bg" => "#f1f3f6",
                "enable_publishing" => false,
                "hide_legend" => true,
                "allow_symbol_change" => true,
                "show_popup_button" => true,
                "popup_width" => "1000",
                "popup_height" => "650",
            ],
            [
                'container_id' => 'tradingview_' . '20000',
                'width' => 300,
                'height' => 400,
                'symbol' => 'FX:EURUSD',
                'interval' => 'D',
                'timezone' => 'Asia/Tokyo',
                'theme' => 'light',
                'style' => '1',
                'locale' => 'ja',
                "toolbar_bg" => "#f1f3f6",
                "enable_publishing" => false,
                "hide_legend" => true,
                "allow_symbol_change" => true,
                "show_popup_button" => true,
                "popup_width" => "1000",
                "popup_height" => "650",
            ],
            [
                'container_id' => 'tradingview_' . '30000',
                'width' => 300,
                'height' => 400,
                'symbol' => 'FX:GBPUSD',
                'interval' => 'D',
                'timezone' => 'Asia/Tokyo',
                'theme' => 'light',
                'style' => '1',
                'locale' => 'ja',
                "toolbar_bg" => "#f1f3f6",
                "enable_publishing" => false,
                "hide_legend" => true,
                "allow_symbol_change" => true,
                "show_popup_button" => true,
                "popup_width" => "1000",
                "popup_height" => "650",
            ],
            [
                'container_id' => 'tradingview_' . '40000',
                'width' => 300,
                'height' => 400,
                'symbol' => 'FX_IDC:XAUUSD',
                'interval' => 'D',
                'timezone' => 'Asia/Tokyo',
                'theme' => 'light',
                'style' => '1',
                'locale' => 'ja',
                "toolbar_bg" => "#f1f3f6",
                "enable_publishing" => false,
                "hide_legend" => true,
                "allow_symbol_change" => true,
                "show_popup_button" => true,
                "popup_width" => "1000",
                "popup_height" => "650",
            ],
        ];
        add_action('the_title', function ($content) {
            $dataset = [
                'home_url' => home_url(),
                'nonce' => wp_create_nonce('hogehoge'),
                'tradingview_dataset' => [
                    [
                        'container_id' => 'tradingview_' . '10000',
                        'width' => 300,
                        'height' => 400,
                        'symbol' => 'FX:USDJPY',
                        'interval' => 'D',
                        'timezone' => 'Asia/Tokyo',
                        'theme' => 'light',
                        'style' => '1',
                        'locale' => 'ja',
                        "toolbar_bg" => "#f1f3f6",
                        "enable_publishing" => false,
                        "hide_legend" => true,
                        "allow_symbol_change" => true,
                        "show_popup_button" => true,
                        "popup_width" => "1000",
                        "popup_height" => "650",
                    ],
                    [
                        'container_id' => 'tradingview_' . '20000',
                        'width' => 300,
                        'height' => 400,
                        'symbol' => 'FX:EURUSD',
                        'interval' => 'D',
                        'timezone' => 'Asia/Tokyo',
                        'theme' => 'light',
                        'style' => '1',
                        'locale' => 'ja',
                        "toolbar_bg" => "#f1f3f6",
                        "enable_publishing" => false,
                        "hide_legend" => true,
                        "allow_symbol_change" => true,
                        "show_popup_button" => true,
                        "popup_width" => "1000",
                        "popup_height" => "650",
                    ],
                    [
                        'container_id' => 'tradingview_' . '30000',
                        'width' => 300,
                        'height' => 400,
                        'symbol' => 'FX:GBPUSD',
                        'interval' => 'D',
                        'timezone' => 'Asia/Tokyo',
                        'theme' => 'light',
                        'style' => '1',
                        'locale' => 'ja',
                        "toolbar_bg" => "#f1f3f6",
                        "enable_publishing" => false,
                        "hide_legend" => true,
                        "allow_symbol_change" => true,
                        "show_popup_button" => true,
                        "popup_width" => "1000",
                        "popup_height" => "650",
                    ],
                    [
                        'container_id' => 'tradingview_' . '40000',
                        'width' => 300,
                        'height' => 400,
                        'symbol' => 'FX_IDC:XAUUSD',
                        'interval' => 'D',
                        'timezone' => 'Asia/Tokyo',
                        'theme' => 'light',
                        'style' => '1',
                        'locale' => 'ja',
                        "toolbar_bg" => "#f1f3f6",
                        "enable_publishing" => false,
                        "hide_legend" => true,
                        "allow_symbol_change" => true,
                        "show_popup_button" => true,
                        "popup_width" => "1000",
                        "popup_height" => "650",
                    ],
                ],
                // 'tradingview_id' => 'tradingview_' . (string)rand(10000, 99999),
            ];
            wp_enqueue_script('tradingview_cdn_script', 'https://s3.tradingview.com/tv.js');
            wp_enqueue_script('tradingview', plugin_dir_url(__FILE__) . '/js/script.js');
            wp_localize_script('tradingview', 'dataset', $dataset);
            // wp_localize_script('tradingview', 'dataset', $dataset);
        });
        
        
        ?>
        <!-- PC横並び -->
        <div id="toggle-button" onclick="toggle()">チャートを閉じる</div>
        <div id="chart-container">
            <div id="chart-area">
                <div id="first-chart">
                    <div id="<?php echo $tradingview_dataset[0]['container_id']; ?>"></div>
                    <div class="tradingview-widget-copyright">
                        TradingView提供の
                        <a href="https://jp.tradingview.com/symbols/USDJPY/?exchange=FX" rel="noopener" target="_blank">
                            <span class="blue-text">USDJPYチャート</span>
                        </a>
                    </div>
                </div>
                <div id="second-chart">
                    <div id="<?php echo $tradingview_dataset[1]['container_id']; ?>"></div>
                    <div class="tradingview-widget-copyright">TradingView提供の
                        <a href="https://jp.tradingview.com/symbols/EURUSD/?exchange=FX" rel="noopener" target="_blank">
                            <span class="blue-text">EURUSDチャート</span></a>
                    </div>
                </div>
                <div id="third-chart">
                    <div id="<?php echo $tradingview_dataset[2]['container_id']; ?>"></div>
                    <div class="tradingview-widget-copyright">
                        TradingView提供の
                        <a href="https://jp.tradingview.com/symbols/GBPUSD/?exchange=FX" rel="noopener" target="_blank">
                            <span class="blue-text">GBPUSDチャート</span></a>
                    </div>
                </div>
                <div id="fourth-chart">
                    <div id="<?php echo $tradingview_dataset[3]['container_id']; ?>">
                    </div>
                    <div class="tradingview-widget-copyright">
                        TradingView提供の
                        <a href="https://jp.tradingview.com/symbols/FX_IDC-XAUUSD/" rel="noopener" target="_blank">
                            <span class="blue-text">XAUUSDチャート</span></a>
                    </div>
                </div>
            </div>

        </div>

<?php
    }
}




function tradingview_register_widgets()
{
    register_widget('TradingViewWidget');
}

add_action(
    'widgets_init',
    'tradingview_register_widgets'
);

function tradingview_scripts()
{
    wp_enqueue_style(
        'TradingViewStyle',
        plugins_url(
            'css/style.css',
            __FILE__
        )
    );
}
add_action(
    'wp_enqueue_scripts',
    'tradingview_scripts'
);
