<?php
namespace Elementor;

use \ElementsKit\Elementskit_Widget_Header_Search_Handler as Handler;
use \ElementsKit\Modules\Controls\Controls_Manager as ElementsKit_Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit;


class Elementskit_Widget_Header_Search extends Widget_Base
{

    public $base;

    public function __construct( $data = [], $args = null ) {
		parent::__construct( $data, $args );
		$this->add_script_depends('magnific-popup');
	}

    public function get_name() {
        return Handler::get_name();
    }

    public function get_title() {
        return Handler::get_title();
    }

    public function get_icon() {
        return Handler::get_icon();
    }

    public function get_categories() {
        return Handler::get_categories();
    }

    protected function _register_controls()
    {

        $this->start_controls_section(
            'ekit_header_search',
            [
                'label' => esc_html__('Header Search', 'elementskit'),
            ]
        );

        $this->add_control(
            'ekit_search_placeholder_text', [
                'label' => esc_html__('Placeholder Text', 'elementskit'),
                'type' => Controls_Manager::TEXT,
                'default'   => 'Search...',
                'label_block' => true,
                'dynamic' => [
                    'active' => true,
                ],
            ]
        );


        $this->add_control(
            'ekit_search_icons',
            [
                'label' => esc_html__('Select Icon', 'elementskit'),
                'fa4compatibility' => 'ekit_search_icon',
                'default' => [
                    'value' => 'icon icon-search',
                    'library' => 'ekiticons',
                ],
                'label_block' => true,
                'type' => Controls_Manager::ICONS,

            ]
        );

        $this->add_responsive_control(
            'ekit_search_icon_font_size',
            [
                'label'         => esc_html__('Font Size', 'elementskit'),
                'type'          => Controls_Manager::SLIDER,
                'size_units'    => ['px', 'em'],
                'default' => [
                    'unit' => 'px',
                    'size' => '20',
                ],
                'selectors' => [
                    '{{WRAPPER}} .ekit_navsearch-button' => 'font-size: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .ekit_navsearch-button svg'    => 'max-width: {{SIZE}}{{UNIT}};',
                ],

            ]
        );


        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'ekit_border',
                'selector' => '{{WRAPPER}} .ekit_navsearch-button',
                'separator' => 'before',
            ]
        );

        $this->start_controls_tabs( 'ekit_search_tab_search_tabs' );
            $this->start_controls_tab(
                'ekit_search_tab_search_normal',
                [
                    'label' =>esc_html__( 'Normal', 'elementskit' ),
                ]
            );
            $this->add_control(
                'ekit_searech_icon_color',
                [
                    'label' =>esc_html__( 'Color', 'elementskit' ),
                    'type' => Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .ekit_navsearch-button' => 'color: {{VALUE}};',
                        '{{WRAPPER}} .ekit_navsearch-button svg path'   => 'stroke: {{VALUE}}; fill: {{VALUE}};',
                    ],
                ]
            );

            $this->add_control(
                'ekit_seacrh_icon_bg_color',
                [
                    'label' =>esc_html__( 'Background Color', 'elementskit' ),
                    'type' => Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .ekit_navsearch-button' => 'background-color: {{VALUE}};',
                    ],
                ]
            );
            $this->end_controls_tab();
            
            $this->start_controls_tab(
                'ekit_search_tab_search_hover',
                [
                    'label' =>esc_html__( 'Hover', 'elementskit' ),
                ]
            );
            $this->add_control(
                'ekit_searech_icon_hover_color',
                [
                    'label' =>esc_html__( 'Color', 'elementskit' ),
                    'type' => Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .ekit_navsearch-button:hover' => 'color: {{VALUE}};',
                        '{{WRAPPER}} .ekit_navsearch-button:hover svg path'   => 'stroke: {{VALUE}}; fill: {{VALUE}};',
                    ],
                ]
            );

            $this->add_control(
                'ekit_seacrh_icon_hover_bg_color',
                [
                    'label' =>esc_html__( 'Background Color', 'elementskit' ),
                    'type' => Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .ekit_navsearch-button:hover' => 'background-color: {{VALUE}};',
                    ],
                ]
            );
            $this->end_controls_tab();
        $this->end_controls_tabs();

        $this->end_controls_section();


        $this->start_controls_section(
            'ekit_header_search_section_tab_style',
            [
                'label' => esc_html__('Header Search', 'elementskit'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        // box shadow
        $this->add_group_control(
            Group_Control_Box_Shadow::get_type(), [
                'name'       => 'ekit_header_search',
                'selector'   => '{{WRAPPER}} .ekit_navsearch-button',

            ]
        );
        // border radius
        $this->add_control(
            'ekit_header_border_radius',
            [
                'label' => esc_html__( 'Border radius', 'elementskit' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'default' => [
                    'top' => '50',
                    'right' => '50',
                    'bottom' => '50' ,
                    'left' => '50',
                    'unit' => '%',
                ],
                'selectors' => [
                    '{{WRAPPER}} .ekit_navsearch-button' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'ekit_search_margin',
            [
                'label'         => esc_html__('Margin', 'elementskit'),
                'type'          => Controls_Manager::DIMENSIONS,
                'size_units'    => ['px', 'em'],
                'default' => [
                    'top' => '5',
                    'right' => '5',
                    'bottom' => '5' ,
                    'left' => '5',
                ],
                'selectors' => [
                    '{{WRAPPER}} .ekit_navsearch-button' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
			'ekit_search_padding',
			[
				'label' => esc_html__( 'Padding', 'elementskit' ),
				'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'default' => [
                    'top' => '0',
                    'right' => '0',
                    'bottom' => '0' ,
                    'left' => '0',
                ],
				'selectors' => [
					'{{WRAPPER}} .ekit_navsearch-button' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);


        $this->add_control(
			'ekit_search_height_width_socher',
			[
				'label' => esc_html__( 'Use Height Width', 'elementskit' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'elementskit' ),
				'label_off' => esc_html__( 'Hide', 'elementskit' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);

        $this->add_responsive_control(
            'ekit_search_width',
            [
                'label'         => esc_html__('Width', 'elementskit'),
                'type'          => Controls_Manager::SLIDER,
                'size_units'    => ['px', 'em', '%'],
                'default' => [
                    'unit' => 'px',
                    'size' => '40',
                ],
                'selectors' => [
                    '{{WRAPPER}} .ekit_navsearch-button' => 'width: {{SIZE}}{{UNIT}};',
                ],
                'condition' => [
                    'ekit_search_height_width_socher' => 'yes'
                ]
            ]
        );
        $this->add_responsive_control(
            'ekit_search_height',
            [
                'label'         => esc_html__('Height', 'elementskit'),
                'type'          => Controls_Manager::SLIDER,
                'size_units'    => ['px', 'em', '%'],
                'default' => [
                    'unit' => 'px',
                    'size' => '40',
                ],
                'selectors' => [
                    '{{WRAPPER}} .ekit_navsearch-button' => 'height: {{SIZE}}{{UNIT}};',
                ],
                'condition' => [
                    'ekit_search_height_width_socher' => 'yes'
                ]
            ]
        );
        $this->add_responsive_control(
            'ekit_search_line_height',
            [
                'label'         => esc_html__('Line Height', 'elementskit'),
                'type'          => Controls_Manager::SLIDER,
                'size_units'    => ['px', 'em', '%'],
                'default' => [
                    'unit' => 'px',
                    'size' => '40',
                ],
                'selectors' => [
                    '{{WRAPPER}} .ekit_navsearch-button' => 'line-height: {{SIZE}}{{UNIT}};',
                ],
                'condition' => [
                    'ekit_search_height_width_socher' => 'yes'
                ]
            ]
        );
        $this->add_responsive_control(
            'ekit_search_icon_text_align',
            [
                'label' => esc_html__( 'Alignment', 'elementskit' ),
                'type' => Controls_Manager::CHOOSE,
                'options' => [
                    'left' => [
                        'title' => esc_html__( 'Left', 'elementskit' ),
                        'icon' => 'fa fa-align-left',
                    ],
                    'center' => [
                        'title' => esc_html__( 'Center', 'elementskit' ),
                        'icon' => 'fa fa-align-center',
                    ],
                    'right' => [
                        'title' => esc_html__( 'Right', 'elementskit' ),
                        'icon' => 'fa fa-align-right',
                    ],
                ],
                'default' => 'center',
                'toggle' => true,
                'selectors' => [
                    '{{WRAPPER}} .ekit_navsearch-button' => 'text-align: {{VALUE}};',
                ],
            ]
        );
        $this->end_controls_section();

    }


    protected function render( ) {
        echo '<div class="ekit-wid-con" >';
            $this->render_raw();
        echo '</div>';
    }

    protected function render_raw( ) {
        $settings = $this->get_settings();
        /*
         *
         * Roots.io searchform.php template hack to fix Polylang search
         * https://gist.github.com/bramchi/d0767c32a772550486ea
         * Note: Polylang setting 'Hide URL language info for default language' should be enabled for this to work. 
         * Soil-nice-search disabled in Roots.
         *
         */
        $language_prefix = (!function_exists('pll_current_language') ? '' : pll_current_language());
                
        ?>
        <a href="#ekit_modal-popup-<?php echo esc_attr($this->get_id()); ?>" class="ekit_navsearch-button ekit-modal-popup">
        <?php
            // new icon
            $migrated = isset( $settings['__fa4_migrated']['ekit_search_icons'] );
            // Check if its a new widget without previously selected icon using the old Icon control
            $is_new = empty( $settings['ekit_search_icon'] );
            if ( $is_new || $migrated ) {
                // new icon
                Icons_Manager::render_icon( $settings['ekit_search_icons'], [ 'aria-hidden' => 'true' ] );
            } else {
                ?>
                <i class="<?php echo $settings['ekit_search_icon']; ?>" aria-hidden="true"></i>
                <?php
            }
        ?>
                </a>
        <!-- language switcher strart -->
        <!-- xs modal -->
        <div class="zoom-anim-dialog mfp-hide ekit_modal-searchPanel" id="ekit_modal-popup-<?php echo esc_attr($this->get_id()); ?>">
            <div class="ekit-search-panel">
            <!-- Polylang search - thanks to Alain Melsens -->
                <form role="search" method="get" class="ekit-search-group" action="<?php echo esc_url( home_url( '/'.$language_prefix ) ); ?>">
                    <input type="search" class="ekit_search-field" placeholder="<?php echo esc_attr( $settings['ekit_search_placeholder_text'] ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
                    <button type="submit" class="ekit_search-button"><i class="icon icon-search"></i></button>
                </form>
            </div>
        </div><!-- End xs modal -->
        <!-- end language switcher strart -->
        <?php
    }
    protected function _content_template() { }
}