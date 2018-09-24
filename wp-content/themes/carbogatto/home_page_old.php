<?php
/*
Template Name: Главная страница
*/
?>
<?php wp_reset_query();
$qo=get_queried_object();
?>

<?php get_header(); ?>


      <section class="main index">
         <div class="bg-block">
            <!--Top-->
            <div class="top-block">
               <div class="site-container">
                  <div class="container">
                     <p>The City Racer gives you back your city. With its strong performance, CARBO GATTO leaves everything behind them. The slender design provides for true pleasure of driving and even brings a smile to the faces of first-time motorbike riders.</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="frame-block">
            <div class="site-container">
               <div class="container">
                  <img class="spacer" src="<?php echo esc_url( get_template_directory_uri() ); ?>/build/img/pages/index/spacer-frame.png">
                  <div class="video-container">
                     <div class="top-line"></div>
                     <video class="lozad __frame-video" data-src="<?php echo esc_url( get_template_directory_uri() ); ?>/build/img/pages/index/frame.mp4" preload="auto" muted="muted"></video>
                     <div class="bottom-line"></div>
                  </div>
                  <div class="title">Frame</div>
                  <div class="carbon lozad __frame">
                     <div class="line"></div>
                     <div class="text">CARBON MADE FRAME WITH LIGHT WEIGHT</div>
                     <div class="line"></div>
                  </div>
                  <div class="text-block">
                     <p>The City Racer gives you back your city. With its strong performance, CARBO GATTO leaves everything behind them. The slender design provides for true pleasure of driving and even brings a smile to the faces of first-time motorbike riders.</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="bg-block">
            <div class="battery-block">
               <div class="site-container">
                  <div class="container">
                     <div class="icons-block lozad __battery">
                        <div class="icons-line"></div>
                        <div class="icons-row">
                           <svg class='icons-icon __battery' width="82px" height="44px" viewBox="0 0 82 44">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                                 <g transform="translate(2.000000, 2.000000)" stroke="#00D5FF" stroke-width="4">
                                    <g class='__body'>
                                       <path
                                          d="M64.9671599,40 C70.5043971,40 75,35.5191124 75,30 L75,10 C75,4.48088758 70.5043971,0 64.9671599,0 L10.0328401,0 C4.49560287,0 0,4.48088758 0,10 L0,30 C0,35.5191124 4.49560287,40 10.0328401,40 L64.9671599,40 Z"
                                          id="Stroke-1"></path>
                                       <path d="M78,14 L78,22"></path>
                                    </g>
                                    <path class='__1' d="M8,9 L8,30"></path>
                                    <path class='__2' d="M15,7 L15,33"></path>
                                    <path class='__3' d="M21,7 L21,33"></path>
                                    <path class='__4' d="M28,7 L28,33"></path>
                                    <path class='__5' d="M34,7 L34,33"></path>
                                    <path class='__6' d="M41,7 L41,33"></path>
                                    <path class='__7' d="M47,7 L47,33"></path>
                                    <path class='__8' d="M54,7 L54,33"></path>
                                    <path class='__9' d="M61,7 L61,33"></path>
                                    <path class='__10' d="M68,9 L68,30"></path>
                                 </g>
                              </g>
                           </svg>
                           <div class="icons-title"><span class="__number __capacity" data-to="15">0</span><span>A/h</span></div>
                           <div class="icons-text">Capacity</div>
                        </div>
                        <div class="icons-line"></div>
                        <div class="icons-row">
                           <svg class="icons-icon __voltage">
                              <use xlink:href="#svg-voltage"></use>
                           </svg>
                           <div class="icons-title __pink"><span class="__number __voltage" data-to="36">0</span><span>V</span></div>
                           <div class="icons-text">Voltage</div>
                        </div>
                        <div class="icons-line"></div>
                        <div class="icons-row">
                           <svg class='icons-icon __range' width="73px" height="35px" viewBox="0 0 73 35">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                 <g transform="translate(-1.000000, -1.000000)">
                                    <path class='dots' d="M16.25,28.4602 L59.753,28.4602" stroke="#F39A00" stroke-width="4" stroke-linecap="round"
                                       stroke-linejoin="round" stroke-dasharray="2,8"></path>
                                    <g transform="translate(0.000000, -0.537800)">
                                       <path class="wheel-left"
                                          d="M14.3813,28.998 C14.3813,31.92 12.0133,34.288 9.0913,34.288 C6.1703,34.288 3.8013,31.92 3.8013,28.998 C3.8013,26.077 6.1703,23.709 9.0913,23.709 C12.0133,23.709 14.3813,26.077 14.3813,28.998 Z"
                                          stroke="#F39A00" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></path>
                                       <g class='wheel-right'>
                                          <path
                                             d="M71.2998,28.998 C71.2998,31.92 68.9318,34.288 66.0098,34.288 C63.0888,34.288 60.7208,31.92 60.7208,28.998 C60.7208,26.077 63.0888,23.709 66.0098,23.709 C68.9318,23.709 71.2998,26.077 71.2998,28.998"
                                             fill="#F39A00"></path>
                                          <path
                                             d="M71.2998,28.998 C71.2998,31.92 68.9318,34.288 66.0098,34.288 C63.0888,34.288 60.7208,31.92 60.7208,28.998 C60.7208,26.077 63.0888,23.709 66.0098,23.709 C68.9318,23.709 71.2998,26.077 71.2998,28.998 Z"
                                             stroke="#F39A00" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></path>
                                       </g>
                                       <g class='flag'>
                                          <path d="M66.0098,28.2295 L66.0098,2.5955" stroke="#F39A00" stroke-width="2" stroke-linecap="round"
                                             stroke-linejoin="round"></path>
                                          <polygon stroke="#F39A00" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" mask="url(#mask-2)"
                                             points="51.206 14.138 66.01 14.138 66.01 2.595 51.206 2.595"></polygon>
                                          <polygon fill="#F39A00" points="55.372 6.813 58.596 6.813 58.596 3.589 55.372 3.589"></polygon>
                                          <polygon fill="#F39A00" points="61.82 6.813 65.044 6.813 65.044 3.589 61.82 3.589"></polygon>
                                          <polygon fill="#F39A00" points="58.595 10.037 61.82 10.037 61.82 6.813 58.595 6.813"></polygon>
                                          <polygon fill="#F39A00" points="55.372 13.261 58.596 13.261 58.596 10.037 55.372 10.037"></polygon>
                                          <polygon fill="#F39A00" points="61.82 13.261 65.044 13.261 65.044 10.037 61.82 10.037"></polygon>
                                          <polygon fill="#F39A00" points="52.148 10.037 55.372 10.037 55.372 6.813 52.148 6.813"></polygon>
                                       </g>
                                    </g>
                                 </g>
                              </g>
                           </svg>
                           <div class="icons-title __yellow"><span class="__number __no-margin __range-from" data-to="50">0</span><span>-</span><span class="__number __range-from" data-to="60">0</span><span>km</span></div>
                           <div class="icons-text">Range</div>
                        </div>
                        <div class="icons-line"></div>
                     </div>
                     <div class="title">Battery</div>
                     <p>Relaxed travelling on your daily tour of the city with an average range of 50 to 60 kilometres. This is how to charge the battery: Simply remove the battery box and plug into any socket with the battery charger. The battery can of course be charged whilst the box remains in the CARBO GATTO. The battery box is secured against unauthorized access. The high quality BMS Battery Management System protects against short circuits and excess current.</p>
                  </div>
               </div>
            </div>
            <div class="suspension-block">
               <div class="site-container">
                  <div class="container">
                     <div class="bike lozad __sus-bike">
                        <div class="icon">
                           <svg class="bike-icon" width="402px" height="186px" viewBox="0 0 402 186" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                 <g transform="translate(1.000000, -1.000000)" stroke="#FFFFFF" stroke-width="3">
                                    <path d="M168.9571,29.4054 C222.2951,15.4654 269.8921,21.8484 269.8921,21.8484 C269.8921,22.0874 273.8921,25.6094 273.8921,25.6094 C273.8921,25.6094 277.3551,35.3424 277.4751,41.6704 C277.4751,41.6704 203.5551,23.8544 192.9581,60.9934 C183.9341,92.6224 212.2261,141.4504 220.8201,155.2424 C221.8101,156.8324 220.6221,158.8824 218.7491,158.8094 L176.0541,157.1394 L159.8541,155.1284"></path>
                                    <path d="M100.9879,19.6374 C100.9879,19.6374 99.2239,20.1124 100.6489,22.6224 C102.0729,25.1324 111.2309,41.2764 127.2389,39.0374 C143.2479,36.7994 150.0319,32.6614 156.8149,35.9174 C163.5979,39.1734 173.7869,43.6954 184.4239,40.9374 C189.9179,39.5124 193.5809,38.0204 192.6319,35.1034 C191.6819,32.1864 188.2899,32.1864 185.3049,32.6614 C182.3209,33.1364 173.8419,32.5944 168.9569,29.4054 C164.0729,26.2174 164.0729,25.0644 161.5639,25.9464 C159.0529,26.8274 127.7819,36.8674 115.9789,29.2694 C104.1759,21.6724 102.4799,19.0274 100.9879,19.6374 Z"></path>
                                    <path d="M153.8482,34.9426 C153.8482,34.9426 136.8722,44.9376 136.7782,46.3416 C136.6852,47.7466 154.3802,64.3186 156.1592,90.2536 C157.9382,116.1886 158.1252,122.5906 158.1252,122.5906"></path>
                                    <path d="M77.1759,118.4723 C80.1309,119.7683 86.8759,120.8683 98.3919,120.6823 C109.9079,120.4943 146.8899,120.4943 166.9259,123.7713 C186.9629,127.0483 184.1139,126.5313 188.4609,133.0403 C191.0489,136.9173 195.2959,145.8683 195.2959,145.8683 C195.2959,145.8683 200.8199,155.6983 190.0519,155.6043 C179.2849,155.5113 147.0959,156.8513 115.8999,148.6763 C87.0979,141.1283 59.6259,132.2143 53.2889,126.9983 C52.8239,126.6173 53.1069,125.8613 53.7089,125.8673 C56.1589,125.8903 60.7029,125.7783 60.5669,124.6143 C60.3789,123.0223 60.1969,118.9033 60.5689,118.2473 C60.9409,117.5923 66.1839,113.8473 68.8989,114.3153 C68.8989,114.3153 73.1759,116.7163 77.1759,118.4723 Z"></path>
                                    <path d="M95.4937,134.5241 C95.4937,134.5241 91.4907,133.5931 91.3047,130.8941 C91.1187,128.1951 98.1927,128.1951 116.9027,128.1951 C135.6117,128.1951 147.9917,128.7531 148.9227,130.8011 C149.8537,132.8491 146.8747,136.8511 144.5477,138.5271 C142.2207,140.2031 139.8937,142.1571 127.6067,140.5751 C115.3197,138.9931 95.4937,134.5241 95.4937,134.5241 Z"></path>
                                    <path d="M283.2877,11.7531 C283.1557,11.7531 275.9697,18.3221 275.9697,18.3221 C275.9697,18.3221 274.0957,20.7701 276.4537,23.1281 C278.8127,25.4871 281.3487,22.9081 281.3487,22.9081 L288.0497,16.4711 C288.0497,16.4711 289.2397,14.1341 287.3447,12.2381 C285.4487,10.3421 283.2877,11.7531 283.2877,11.7531 Z"></path>
                                    <path d="M285.9332,11.2487 L290.6072,6.4627 C290.6072,6.4627 291.7092,5.5807 292.7232,6.4627 C293.7372,7.3447 293.2962,8.3137 292.7232,8.9757 C292.1502,9.6367 288.1282,13.3697 288.1282,13.3697"></path>
                                    <path d="M290.607,11.1799 L300.35,13.0759 C300.35,13.0759 312.475,15.0599 318.692,27.6259 C324.909,40.1909 326.85,44.3419 326.85,44.3419 C326.85,44.3419 333.47,56.8479 334.942,78.7949 C336.414,100.7419 339.356,125.7549 338.988,125.7549 C338.621,125.7549 327.462,125.0189 323.295,117.6629 C319.126,110.3059 278.05,27.6669 278.05,27.6669 L276.454,23.1289"></path>
                                    <path d="M302.3307,53.049 C302.3307,53.049 301.2467,50.959 303.4917,51.268 C305.7367,51.578 312.3177,53.049 312.3177,53.049 C312.3177,53.049 321.8407,55.139 323.6987,74.107 C325.5567,93.075 326.7177,103.837 323.6987,98.572 C320.6797,93.307 302.3307,53.049 302.3307,53.049 Z"></path>
                                    <path d="M290.607,6.4626 C290.607,6.4626 281.165,5.2176 279.093,4.9266 C277.023,4.6356 265.252,0.3126 265.143,3.9456 C265.034,7.5786 264.634,7.9056 268.74,8.2696 C272.845,8.6326 286.646,10.5186 286.646,10.5186"></path>
                                    <path d="M268.4205,21.674 L282.0945,9.907"></path>
                                    <path d="M274.356,26.9841 L277.211,25.2801"></path>
                                    <path d="M315.3814,54.9509 C313.8944,55.3169 313.3224,55.5079 311.8774,55.9749 C309.4214,56.7709 307.0294,57.7099 304.7124,58.7829"></path>
                                    <path d="M295.9508,64.0763 C278.3048,75.9353 266.6948,96.0823 266.6948,118.9413 C266.6948,155.4223 296.2688,184.9963 332.7508,184.9963 C369.2328,184.9963 398.8068,155.4223 398.8068,118.9413 C398.8068,82.4583 369.2328,52.8843 332.7508,52.8843 C332.0598,52.8843 330.9778,52.8633 330.2938,52.8843"></path>
                                    <path d="M322.8853,68.4743 C318.7813,69.2723 314.8503,70.5583 311.1573,72.2703"></path>
                                    <path d="M302.7506,77.1843 C289.7826,86.5183 281.3396,101.7433 281.3396,118.9413 C281.3396,147.3343 304.3566,170.3523 332.7506,170.3523 C361.1456,170.3523 384.1626,147.3343 384.1626,118.9413 C384.1626,90.8503 361.6346,68.0223 333.6606,67.5373"></path>
                                    <path d="M128.4879,140.4899 C129.8729,136.5939 130.8929,132.5229 131.5079,128.3209"></path>
                                    <path d="M124.0445,150.8132 C123.7995,151.2522 123.5485,151.6892 123.2935,152.1222 L121.3755,155.3632 C109.5485,172.8972 89.0745,184.7732 66.3325,184.7732 C29.9745,184.7732 0.5005,155.2982 0.5005,118.9412 C0.5005,82.5832 29.9745,53.1082 66.3325,53.1082 C102.6905,53.1082 132.1655,82.5832 132.1655,118.9412 C132.1655,119.6332 132.1545,120.3232 132.1325,121.0102"></path>
                                    <path d="M117.7154,120.6823 C117.7344,120.1043 117.7444,119.5233 117.7444,118.9413 C117.7444,90.5463 94.7264,67.5293 66.3324,67.5293 C37.9384,67.5293 14.9214,90.5463 14.9214,118.9413 C14.9214,147.3343 37.9384,170.3523 66.3324,170.3523 C84.3924,170.3523 100.2774,161.0403 109.4474,146.9563"></path>
                                    <path d="M113.9625,138.3298 C115.2755,135.1058 116.2725,131.7188 116.9115,128.2078"></path>
                                    <path d="M317.6764,106.8327 C315.1704,110.0617 313.6784,114.1157 313.6784,118.5187 C313.6784,129.0517 322.2174,137.5907 332.7504,137.5907 C343.2844,137.5907 351.8224,129.0517 351.8224,118.5187 C351.8224,109.3257 345.3204,101.6527 336.6634,99.8477"></path>
                                    <path d="M277.4752,41.6706 L280.3712,46.7076 C280.4832,46.9576 280.7742,47.0716 281.0252,46.9626 L283.2492,46.0046 C283.4952,45.8996 283.7802,46.0046 283.8962,46.2456 L284.2872,47.0556 C284.4052,47.2996 284.6962,47.4046 284.9422,47.2926 L287.2892,46.2246"></path>
                                 </g>
                              </g>
                           </svg>
                           <img class="shocks" src="<?php echo esc_url( get_template_directory_uri() ); ?>/build/img/pages/index/sus-bike.png">
                        </div>
                        <span>Adjustable suspension</span>
                     </div>
                     <div class="title">Suspension</div>
                     <img class="logos lozad __sus-logos" src="<?php echo esc_url( get_template_directory_uri() ); ?>/build/img/pages/index/sus-logos.png">
                     <p>Relaxed travelling on your daily tour of the city with an average range of 50 to 60 kilometres. This is how to charge the battery: Simply remove the battery box and plug into any socket with the battery charger. The battery can of course be charged whilst the box remains in the CARBO GATTO. The battery box is secured against unauthorized access. The high quality BMS Battery Management System protects against short circuits and excess current.</p>
                  </div>
               </div>
            </div>
            <div class="motor-block">
               <div class="site-container">
                  <div class="container">
                     <div class="icons-block lozad __motor">
                        <div class="icons-line"></div>
                        <div class="icons-row">
                           <svg class="icons-icon __speed" width="80px" height="58px" viewBox="0 0 80 58" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                              <!-- Generator: Sketch 49.3 (51167) - http://www.bohemiancoding.com/sketch -->
                              <title>speed</title>
                              <desc>Created with Sketch.</desc>
                              <defs></defs>
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                 <g transform="translate(2.000000, 2.000000)" stroke="#00D5FF">
                                    <path d="M3.2994,53.2663 C1.1794,48.5462 0,43.3137 0,37.8079 C0,16.9411 16.9412,0 37.8079,0 C58.6747,0 75.6159,16.9411 75.6159,37.8079 C75.6159,43.3137 74.4364,48.5462 72.3165,53.2663 L3.2994,53.2663 Z" stroke-width="4"></path>
                                    <path d="M11.1158,49.2337 C9.4761,45.5827 8.5638,41.5354 8.5638,37.2767 C8.5638,21.1365 21.6677,8.0326 37.8079,8.0326 C53.9482,8.0326 67.0521,21.1365 67.0521,37.2767 C67.0521,41.5354 66.1398,45.5827 64.5,49.2337 L62.8826,53.2663 L13.1788,53.2663 L11.1158,49.2337 Z" stroke-width="2.5"></path>
                                    <rect class="__arrow" x="46" y="38" fill="#00D5FF" width="18" height="4" ></rect>
                                    <path d="M27.0528,53.2663 C26.3763,51.7602 26,50.0905 26,48.3337 C26,41.6753 31.4058,36.2696 38.0641,36.2696 C44.7225,36.2696 50.1283,41.6753 50.1283,48.3337 C50.1283,50.0905 49.7519,51.7602 49.0755,53.2663 L27.0528,53.2663 Z" fill="#000" stroke-width="4"></path>
                                    <path d="M38.0641,6.3811 L38.0641,0" stroke-width="4"></path>
                                    <path d="M7.816,31.0093 L1.6198,29.4841" stroke-width="4"></path>
                                    <path d="M18.0333,14.4418 L13.4025,10.0516" stroke-width="4"></path>
                                    <path d="M57.0651,14.4418 L61.6959,10.0516" stroke-width="4"></path>
                                    <path d="M67.2329,31.0093 L73.429,29.4841" stroke-width="4"></path>
                                 </g>
                              </g>
                           </svg>
                           <div class="icons-title">45/25 km/h</div>
                           <div class="icons-text">Speed</div>
                        </div>
                        <div class="icons-line"></div>
                        <div class="icons-row">
                           <svg class="icons-icon __power">
                              <use xlink:href="#svg-power"></use>
                           </svg>
                           <div class="icons-title __pink">2 kW</div>
                           <div class="icons-text">Power</div>
                        </div>
                        <div class="icons-line"></div>
                        <div class="icons-row __no-border">
                           <svg class="icons-icon __features" width="91px" height="41px" viewBox="0 0 91 41" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                              <!-- Generator: Sketch 49.3 (51167) - http://www.bohemiancoding.com/sketch -->
                              <title>Vector Smart Object6.ai</title>
                              <desc>Created with Sketch.</desc>
                              <defs></defs>
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                 <g transform="translate(0.000000, -6.000000)" fill="#F39A00">
                                    <path class="__1" d="M27.5601,26.3874 L18.275,46.4134 L0.1549,46.4134 L9.44,26.0483 L0.1549,6.1549 L18.275,6.1549 L27.5601,26.3874 Z M5.6509,9.6549 L13.2944,26.0311 L5.5972,42.9134 L16.0398,42.9134 L23.7057,26.3798 L16.0302,9.6549 L5.6509,9.6549 Z" fill-opacity="0.2"></path>
                                    <path class="__2" d="M48.6231,26.3874 L39.3379,46.4134 L21.2178,46.4134 L30.503,26.0483 L21.2178,6.1549 L39.3379,6.1549 L48.6231,26.3874 Z M26.7139,9.6549 L34.3574,26.0311 L26.6602,42.9134 L37.1028,42.9134 L44.7686,26.3798 L37.0932,9.6549 L26.7139,9.6549 Z" fill-opacity="0.45"></path>
                                    <path class="__3" d="M69.4339,26.3874 L60.1488,46.4134 L42.0287,46.4134 L51.3138,26.0483 L42.0287,6.1549 L60.1488,6.1549 L69.4339,26.3874 Z M47.5248,9.6549 L55.1683,26.0311 L47.4711,42.9134 L57.9137,42.9134 L65.5795,26.3798 L57.904,9.6549 L47.5248,9.6549 Z" fill-opacity="0.75"></path>
                                    <path class="__4" d="M90.3936,26.3874 L81.1084,46.4134 L62.9883,46.4134 L72.2735,26.0483 L62.9883,6.1549 L81.1084,6.1549 L90.3936,26.3874 Z M68.4844,9.6549 L76.1279,26.0311 L68.4307,42.9134 L78.8733,42.9134 L86.5392,26.3798 L78.8637,9.6549 L68.4844,9.6549 Z"></path>
                                 </g>
                              </g>
                           </svg>
                           <div class="icons-title __yellow">4 DRIVE MODES</div>
                           <div class="icons-text">features</div>
                        </div>
                     </div>
                     <a class="button" href="support">Support</a>
                     <div class="title">Motor</div>
                     <p>Back wheel hub electric motor, brushless. 45 km/h and 25 km/h to be chosen from and are perfect for the city centre. 2 kW. More powerful motors available upon request. 4 drive modes can be selected via the handlebar push-button: Eco / Custom / Sport / Wheely.</p>
                  </div>
               </div>
            </div>
            <div class="stand-block">
               <div class="site-container">
                  <div class="container">
                     <div class="title">Stand</div>
                     <div class="bike lozad __stand">
                        <svg class="bike-icon" width="404px" height="191px" viewBox="0 0 404 191" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                           <!-- Generator: Sketch 49.3 (51167) - http://www.bohemiancoding.com/sketch -->
                           <title>Vector Smart Object6.ai</title>
                           <desc>Created with Sketch.</desc>
                           <defs>
                              <polygon points="0.7609 0.4076 34.9012632 0.4076 34.9012632 34 0.7609 34"></polygon>
                           </defs>
                           <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                              <g transform="translate(2.000000, 2.000000)">
                                 <path d="M169.2387,27.6872 C222.5767,13.7472 270.1737,20.1302 270.1737,20.1302 C270.1737,20.3692 274.1737,23.8912 274.1737,23.8912 C274.1737,23.8912 277.6367,33.6242 277.7567,39.9522 C277.7567,39.9522 203.8367,22.1362 193.2397,59.2752 C184.2157,90.9042 212.5077,139.7322 221.1017,153.5242 C222.0917,155.1142 220.9037,157.1642 219.0307,157.0912 L176.3357,155.4212 L160.1357,153.4102" stroke="#00D2FF" stroke-width="5.563"></path>
                                 <path d="M101.2694,17.9192 C101.2694,17.9192 99.5054,18.3942 100.9304,20.9042 C102.3544,23.4142 111.5124,39.5582 127.5204,37.3192 C143.5294,35.0812 150.3134,30.9432 157.0964,34.1992 C163.8794,37.4552 174.0684,41.9772 184.7054,39.2192 C190.1994,37.7942 193.8624,36.3022 192.9134,33.3852 C191.9634,30.4682 188.5714,30.4682 185.5864,30.9432 C182.6024,31.4182 174.1234,30.8762 169.2384,27.6872 C164.3544,24.4992 164.3544,23.3462 161.8454,24.2282 C159.3344,25.1092 128.0634,35.1492 116.2604,27.5512 C104.4574,19.9542 102.7614,17.3092 101.2694,17.9192 Z" stroke="#00D2FF" stroke-width="5.563"></path>
                                 <path d="M154.1298,33.2243 C154.1298,33.2243 137.1538,43.2193 137.0598,44.6233 C136.9668,46.0283 154.6618,62.6003 156.4408,88.5353 C158.2198,114.4703 158.4068,120.8723 158.4068,120.8723" stroke="#00D2FF" stroke-width="5.563"></path>
                                 <path d="M77.4574,116.7541 C80.4124,118.0501 87.1574,119.1501 98.6734,118.9641 C110.1894,118.7761 147.1714,118.7761 167.2074,122.0531 C187.2444,125.3301 184.3954,124.8131 188.7424,131.3221 C191.3304,135.1991 195.5774,144.1501 195.5774,144.1501 C195.5774,144.1501 201.1014,153.9801 190.3334,153.8861 C179.5664,153.7931 147.3774,155.1331 116.1814,146.9581 C87.3794,139.4101 59.9074,130.4961 53.5704,125.2801 C53.1054,124.8991 53.3884,124.1431 53.9904,124.1491 C56.4404,124.1721 60.9844,124.0601 60.8484,122.8961 C60.6604,121.3041 60.4784,117.1851 60.8504,116.5291 C61.2224,115.8741 66.4654,112.1291 69.1804,112.5971 C69.1804,112.5971 73.4574,114.9981 77.4574,116.7541 Z" stroke="#00D2FF" stroke-width="5.563"></path>
                                 <path d="M95.7753,132.8059 C95.7753,132.8059 91.7723,131.8749 91.5863,129.1759 C91.4003,126.4769 98.4743,126.4769 117.1843,126.4769 C135.8933,126.4769 148.2733,127.0349 149.2043,129.0829 C150.1353,131.1309 147.1563,135.1329 144.8293,136.8089 C142.5023,138.4849 140.1753,140.4389 127.8883,138.8569 C115.6013,137.2749 95.7753,132.8059 95.7753,132.8059 Z" stroke="#00D2FF" stroke-width="5.563"></path>
                                 <path d="M283.5692,10.0349 C283.4372,10.0349 276.2512,16.6039 276.2512,16.6039 C276.2512,16.6039 274.3772,19.0519 276.7352,21.4099 C279.0942,23.7689 281.6302,21.1899 281.6302,21.1899 L288.3312,14.7529 C288.3312,14.7529 289.5212,12.4159 287.6262,10.5199 C285.7302,8.6239 283.5692,10.0349 283.5692,10.0349 Z" stroke="#00D2FF" stroke-width="5.563"></path>
                                 <path d="M286.2147,9.5305 L290.8887,4.7445 C290.8887,4.7445 291.9907,3.8625 293.0047,4.7445 C294.0187,5.6265 293.5777,6.5955 293.0047,7.2575 C292.4317,7.9185 288.4097,11.6515 288.4097,11.6515" stroke="#00D2FF" stroke-width="5.563"></path>
                                 <path d="M290.8885,9.4616 L300.6315,11.3576 C300.6315,11.3576 312.7565,13.3416 318.9735,25.9076 C325.1905,38.4726 327.1315,42.6236 327.1315,42.6236 C327.1315,42.6236 333.7515,55.1296 335.2235,77.0766 C336.6955,99.0236 339.6375,124.0366 339.2695,124.0366 C338.9025,124.0366 327.7435,123.3006 323.5765,115.9446 C319.4075,108.5876 278.3315,25.9486 278.3315,25.9486 L276.7355,21.4106" stroke="#00D2FF" stroke-width="5.563"></path>
                                 <path d="M302.6122,51.3308 C302.6122,51.3308 301.5282,49.2408 303.7732,49.5498 C306.0182,49.8598 312.5992,51.3308 312.5992,51.3308 C312.5992,51.3308 322.1222,53.4208 323.9802,72.3888 C325.8382,91.3568 326.9992,102.1188 323.9802,96.8538 C320.9612,91.5888 302.6122,51.3308 302.6122,51.3308 Z" stroke="#00D2FF" stroke-width="5.563"></path>
                                 <path d="M290.8885,4.7444 C290.8885,4.7444 281.4465,3.4994 279.3745,3.2084 C277.3045,2.9174 265.5335,-1.4056 265.4245,2.2274 C265.3155,5.8604 264.9155,6.1874 269.0215,6.5514 C273.1265,6.9144 286.9275,8.8004 286.9275,8.8004" stroke="#00D2FF" stroke-width="5.563"></path>
                                 <path d="M268.702,19.9558 L282.376,8.1888" stroke="#00D2FF" stroke-width="5.563"></path>
                                 <path d="M274.6376,25.2658 L277.4926,23.5618" stroke="#00D2FF" stroke-width="5.563"></path>
                                 <path d="M315.663,53.2326 C314.176,53.5986 313.604,53.7896 312.159,54.2566 C309.703,55.0526 307.311,55.9916 304.994,57.0646" stroke="#00D2FF" stroke-width="5.563"></path>
                                 <path d="M296.2323,62.3581 C278.5863,74.2171 266.9763,94.3641 266.9763,117.2231 C266.9763,153.7041 296.5503,183.2781 333.0323,183.2781 C369.5143,183.2781 399.0883,153.7041 399.0883,117.2231 C399.0883,80.7401 369.5143,51.1661 333.0323,51.1661 C332.3413,51.1661 331.2593,51.1451 330.5753,51.1661" stroke="#00D2FF" stroke-width="5.563"></path>
                                 <path d="M323.1669,66.7561 C319.0629,67.5541 315.1319,68.8401 311.4389,70.5521" stroke="#00D2FF" stroke-width="5.563"></path>
                                 <path d="M303.0321,75.466 C290.0641,84.8 281.6211,100.025 281.6211,117.223 C281.6211,145.616 304.6381,168.634 333.0321,168.634 C361.4271,168.634 384.4441,145.616 384.4441,117.223 C384.4441,89.132 361.9161,66.304 333.9421,65.819" stroke="#00D2FF" stroke-width="5.563"></path>
                                 <path d="M128.7694,138.7717 C130.1544,134.8757 131.1744,130.8047 131.7894,126.6027" stroke="#00D2FF" stroke-width="5.563"></path>
                                 <path d="M124.3261,149.0949 C124.0811,149.5339 123.8301,149.9709 123.5751,150.4039 L121.6571,153.6449 C109.8301,171.1789 89.3561,183.0549 66.6141,183.0549 C30.2561,183.0549 0.7821,153.5799 0.7821,117.2229 C0.7821,80.8649 30.2561,51.3899 66.6141,51.3899 C102.9721,51.3899 132.4471,80.8649 132.4471,117.2229 C132.4471,117.9149 132.4361,118.6049 132.4141,119.2919" stroke="#00D2FF" stroke-width="5.563"></path>
                                 <path d="M117.997,118.9641 C118.016,118.3861 118.026,117.8051 118.026,117.2231 C118.026,88.8281 95.008,65.8111 66.614,65.8111 C38.22,65.8111 15.203,88.8281 15.203,117.2231 C15.203,145.6161 38.22,168.6341 66.614,168.6341 C84.674,168.6341 100.559,159.3221 109.729,145.2381" stroke="#00D2FF" stroke-width="5.563"></path>
                                 <path d="M114.244,136.6115 C115.557,133.3875 116.554,130.0005 117.193,126.4895" stroke="#00D2FF" stroke-width="5.563"></path>
                                 <path d="M317.9579,105.1145 C315.4519,108.3435 313.9599,112.3975 313.9599,116.8005 C313.9599,127.3335 322.4989,135.8725 333.0319,135.8725 C343.5659,135.8725 352.1039,127.3335 352.1039,116.8005 C352.1039,107.6075 345.6019,99.9345 336.9449,98.1295" stroke="#00D2FF" stroke-width="5.563"></path>
                                 <path d="M277.7567,39.9524 L280.6527,44.9894 C280.7647,45.2394 281.0557,45.3534 281.3067,45.2444 L283.5307,44.2864 C283.7767,44.1814 284.0617,44.2864 284.1777,44.5274 L284.5687,45.3374 C284.6867,45.5814 284.9777,45.6864 285.2237,45.5744 L287.5707,44.5064" stroke="#00D2FF" stroke-width="5.563"></path>
                                 <path class="stand-stick" transform="translate(164.000000, 154.328000)" d="M12.1449,0.4076 L23.2839,26.2106 C37.1679,25.5156 34.7379,34.0006 34.7379,34.0006 L18.9449,33.7566 L0.7609,0.4076" fill="#00D2FF"></path>
                              </g>
                           </g>
                        </svg>
                        Integrated <br> in the design stand
                     </div>
                     <p>Back wheel hub electric motor, brushless. 45 km/h and 25 km/h to be chosen from and are perfect for the city centre. 2 kW. More powerful motors available upon request. 4 drive modes can be selected via the handlebar push-button</p>
                  </div>
               </div>
            </div>
            <div class="tyres-block">
               <div class="site-container">
                  <div class="container">
                     <div class="title">Tyres</div>
                     <img class="logos lozad __tyres-logos" src="<?php echo esc_url( get_template_directory_uri() ); ?>/build/img/pages/index/tyres-logos.png">
                     <p>Back wheel hub electric motor, brushless. 45 km/h and 25 km/h to be chosen from and are perfect for the city centre. 2 kW. More powerful motors available upon request. 4 drive modes can be selected via the handlebar push-button: Eco / Custom</p>
                  </div>
               </div>
            </div>
            <div class="create-block">
               <div class="site-container">
                  <div class="container">
                     <div class="title">Create</div>
                     <div class="lozad __create">
                        <svg class="bike-icon" width="1259px" height="586px" viewBox="0 0 1259 586" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                           <!-- Generator: Sketch 49.3 (51167) - http://www.bohemiancoding.com/sketch -->
                           <title>bike-icon</title>
                           <desc>Created with Sketch.</desc>
                           <defs></defs>
                           <g class="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                              <g transform="translate(0.000000, 1.000000)">
                                 <g class="lines" transform="translate(0.000000, 0.711000)" stroke="#1A4A4F" stroke-width="2">
                                    <path d="M2.5322,346.5639 L180.7742,168.3219" class="Stroke-6"></path>
                                    <path d="M1.2915,358.1254 L192.3355,167.0814" class="Stroke-8"></path>
                                    <path d="M0.7197,369.019 L203.2287,166.51" class="Stroke-10"></path>
                                    <path d="M30.8769,266.6127 L100.8229,196.6667" class="Stroke-1"></path>
                                    <path d="M19.2514,288.559 L122.7694,185.041" class="Stroke-2"></path>
                                    <path d="M12.3232,305.809 L140.0192,178.113" class="Stroke-3"></path>
                                    <path d="M7.7094,320.7436 L154.9544,173.4996" class="Stroke-4"></path>
                                    <path d="M4.5854,334.1889 L168.3994,170.3759" class="Stroke-5"></path>
                                    <path d="M319.5165,60.5434 L314.9335,65.1264" class="Stroke-13"></path>
                                    <path d="M213.5625,166.4975 L132.5425,247.5175" class="Stroke-14"></path>
                                    <path d="M0.707,379.353 L81.727,298.333" class="Stroke-15"></path>
                                    <path d="M223.4209,166.9604 L153.1559,237.2254" class="Stroke-17"></path>
                                    <path d="M1.1704,389.2104 L71.4344,318.9464" class="Stroke-18"></path>
                                    <path d="M326.4257,63.9555 L317.7807,72.6005" class="Stroke-20"></path>
                                    <path d="M332.3925,68.31 L321.7515,78.951" class="Stroke-21"></path>
                                    <path d="M2.0512,398.6508 L66.0872,334.6158" class="Stroke-22"></path>
                                    <path d="M232.8613,167.8412 L168.8253,231.8772" class="Stroke-24"></path>
                                    <path d="M241.9306,169.0932 L182.2246,228.7992" class="Stroke-25"></path>
                                    <path d="M338.3456,72.6782 L326.0066,85.0182" class="Stroke-26"></path>
                                    <path d="M3.3032,407.7201 L63.0092,348.0151" class="Stroke-27"></path>
                                    <path d="M344.3613,76.9838 L330.5453,90.7998" class="Stroke-29"></path>
                                    <path d="M250.666,170.6791 L194.206,227.1391" class="Stroke-30"></path>
                                    <path d="M4.8886,416.4565 L61.3486,359.9965" class="Stroke-31"></path>
                                    <path d="M350.4506,81.2153 L335.3786,96.2883" class="Stroke-32"></path>
                                    <path d="M6.811,424.8549 L60.683,370.9839" class="Stroke-33"></path>
                                    <path d="M259.0654,172.601 L205.1934,226.473" class="Stroke-34"></path>
                                    <path d="M267.186,174.8022 L215.404,226.5842" class="Stroke-35"></path>
                                    <path d="M9.0117,432.976 L60.7937,381.194" class="Stroke-36"></path>
                                    <path d="M356.6088,85.3784 L340.5388,101.4494" class="Stroke-37"></path>
                                    <path d="M275.0429,177.2661 L224.9899,227.3191" class="Stroke-38"></path>
                                    <path d="M362.8329,89.476 L346.0549,106.254" class="Stroke-39"></path>
                                    <path d="M11.476,440.8334 L61.528,390.7804" class="Stroke-40"></path>
                                    <path d="M369.2753,93.3549 L351.9643,110.6669" class="Stroke-41"></path>
                                    <path d="M14.2104,448.4194 L62.7984,399.8314" class="Stroke-42"></path>
                                    <path d="M282.6298,180.0004 L234.0418,228.5884" class="Stroke-43"></path>
                                    <path d="M376.6484,96.3032 L358.3394,114.6122" class="Stroke-44"></path>
                                    <path d="M289.9941,182.9575 L242.6251,230.3255" class="Stroke-45"></path>
                                    <path d="M17.1674,455.7846 L64.5354,408.4156" class="Stroke-46"></path>
                                    <path d="M297.1132,186.1596 L250.7822,232.4906" class="Stroke-47"></path>
                                    <path d="M20.3696,462.9037 L66.6996,416.5727" class="Stroke-48"></path>
                                    <path d="M384.9111,98.3618 L365.2701,118.0028" class="Stroke-49"></path>
                                    <path d="M23.7763,469.8178 L69.2363,424.3578" class="Stroke-50"></path>
                                    <path d="M304.0273,189.5668 L258.5673,235.0268" class="Stroke-51"></path>
                                    <path d="M393.9902,99.6049 L372.8522,120.7419" class="Stroke-52"></path>
                                    <path d="M310.7221,193.1938 L266.0071,237.9088" class="Stroke-53"></path>
                                    <path d="M403.8105,100.1049 L381.2825,122.6329" class="Stroke-54"></path>
                                    <path d="M27.4033,476.5121 L72.1183,431.7971" class="Stroke-55"></path>
                                    <path d="M317.2231,197.0141 L273.1211,241.1161" class="Stroke-56"></path>
                                    <path d="M31.2236,483.0131 L75.3256,438.9111" class="Stroke-57"></path>
                                    <path d="M414.3076,99.9301 L390.8216,123.4151" class="Stroke-58"></path>
                                    <path d="M35.249,489.309 L78.841,445.717" class="Stroke-59"></path>
                                    <path d="M323.519,201.0395 L279.927,244.6315" class="Stroke-60"></path>
                                    <path d="M425.4443,99.1137 L401.9433,122.6147" class="Stroke-61"></path>
                                    <path d="M329.6328,205.2465 L286.4458,248.4335" class="Stroke-62"></path>
                                    <path d="M437.1767,97.7026 L413.6467,121.2326" class="Stroke-63"></path>
                                    <path d="M39.4565,495.4233 L82.6425,452.2363" class="Stroke-64"></path>
                                    <path d="M335.5483,209.6528 L292.6903,252.5098" class="Stroke-65"></path>
                                    <path d="M43.8623,501.3383 L86.7203,458.4813" class="Stroke-66"></path>
                                    <path d="M449.4697,95.7309 L418.5707,126.6299" class="Stroke-67"></path>
                                    <path d="M440.2265,115.2953 L462.3055,93.2163" class="Stroke-68"></path>
                                    <path d="M48.4394,507.0834 L91.0644,464.4584" class="Stroke-69"></path>
                                    <path d="M341.2929,214.2299 L298.6679,256.8539" class="Stroke-70"></path>
                                    <path d="M436.9843,118.5375 L423.4943,132.0275" class="Stroke-71"></path>
                                    <path d="M189.9658,375.8774 L201.1538,364.6894" class="Stroke-72"></path>
                                    <path d="M442.1992,123.644 L428.4182,137.426" class="Stroke-73"></path>
                                    <path d="M475.6777,90.1664 L454.0317,111.8114" class="Stroke-74"></path>
                                    <path d="M346.8393,219.0043 L304.3853,261.4583" class="Stroke-75"></path>
                                    <path d="M53.2138,512.6293 L95.6678,470.1763" class="Stroke-76"></path>
                                    <path d="M309.8476,266.3168 L352.2236,223.9408" class="Stroke-77"></path>
                                    <path d="M172.6416,403.5229 L180.0806,396.0839" class="Stroke-78"></path>
                                    <path d="M58.1503,518.0141 L100.5263,475.6381" class="Stroke-79"></path>
                                    <path d="M489.5995,86.5649 L466.6995,109.4649" class="Stroke-80"></path>
                                    <path d="M190.0605,386.1039 L216.2915,359.8729" class="Stroke-81"></path>
                                    <path d="M447.414,128.7504 L430.688,145.4764" class="Stroke-82"></path>
                                    <path d="M357.4081,229.0776 L315.0561,271.4296" class="Stroke-83"></path>
                                    <path d="M464.372,122.1137 L434.757,151.7287" class="Stroke-84"></path>
                                    <path d="M179.2294,407.2563 L223.1354,363.3503" class="Stroke-85"></path>
                                    <path d="M504.1513,82.3344 L477.5893,108.8964" class="Stroke-86"></path>
                                    <path d="M63.2876,523.1987 L105.6396,480.8467" class="Stroke-87"></path>
                                    <path d="M516.3906,80.4164 L439.2836,157.5244" class="Stroke-88"></path>
                                    <path d="M362.4306,234.3764 L320.0126,276.7944" class="Stroke-89"></path>
                                    <path d="M68.5864,528.2211 L111.0044,485.8031" class="Stroke-90"></path>
                                    <path d="M186.1386,410.6694 L229.9376,366.8694" class="Stroke-91"></path>
                                    <path d="M522.6191,84.5102 L443.7461,163.3822" class="Stroke-92"></path>
                                    <path d="M74.0791,533.0492 L116.6241,490.5042" class="Stroke-93"></path>
                                    <path d="M193.2534,413.8754 L236.8634,370.2654" class="Stroke-94"></path>
                                    <path d="M367.2587,239.8696 L324.7147,282.4146" class="Stroke-95"></path>
                                    <path d="M371.9169,245.5327 L329.1579,288.2917" class="Stroke-96"></path>
                                    <path d="M79.7421,537.7074 L122.5011,494.9484" class="Stroke-97"></path>
                                    <path d="M528.5878,88.8627 L448.1028,169.3477" class="Stroke-98"></path>
                                    <path d="M200.518,416.9321 L243.973,373.4771" class="Stroke-99"></path>
                                    <path d="M207.8964,419.8754 L251.8984,375.8724" class="Stroke-100"></path>
                                    <path d="M85.5966,542.1742 L128.6416,499.1292" class="Stroke-101"></path>
                                    <path d="M376.3837,251.3871 L333.3387,294.4321" class="Stroke-102"></path>
                                    <path d="M537.3593,90.4116 L452.3303,175.4406" class="Stroke-103"></path>
                                    <path d="M215.3662,422.726 L260.5702,377.523" class="Stroke-104"></path>
                                    <path d="M551.0351,87.0571 L456.4171,181.6751" class="Stroke-105"></path>
                                    <path d="M91.6318,546.4613 L135.0548,503.0373" class="Stroke-106"></path>
                                    <path d="M380.6708,257.4223 L337.2478,300.8453" class="Stroke-107"></path>
                                    <path d="M384.7626,263.6508 L340.8666,307.5468" class="Stroke-108"></path>
                                    <path d="M222.913,425.5004 L269.741,378.6724" class="Stroke-109"></path>
                                    <path d="M564.3896,84.0239 L460.3556,188.0589" class="Stroke-110"></path>
                                    <path d="M97.8603,550.5531 L141.7563,506.6571" class="Stroke-111"></path>
                                    <path d="M104.2807,554.4545 L148.7547,509.9795" class="Stroke-112"></path>
                                    <path d="M577.4423,81.2934 L464.1393,194.5964" class="Stroke-113"></path>
                                    <path d="M388.664,270.0717 L344.19,314.5457" class="Stroke-114"></path>
                                    <path d="M230.5249,428.2104 L279.2919,379.4434" class="Stroke-115"></path>
                                    <path d="M392.3622,276.6948 L347.1982,321.8578" class="Stroke-116"></path>
                                    <path d="M238.1933,430.8637 L289.1563,379.8997" class="Stroke-117"></path>
                                    <path d="M110.9043,558.1528 L156.0673,512.9898" class="Stroke-118"></path>
                                    <path d="M590.2451,78.811 L467.7651,201.292" class="Stroke-119"></path>
                                    <path d="M245.9121,433.4662 L299.2921,380.0852" class="Stroke-120"></path>
                                    <path d="M117.7304,561.6469 L163.7144,515.6639" class="Stroke-121"></path>
                                    <path d="M602.8027,76.5756 L471.1987,208.1796" class="Stroke-122"></path>
                                    <path d="M395.8574,283.5209 L349.8734,329.5039" class="Stroke-123"></path>
                                    <path d="M124.7773,564.9223 L171.7213,517.9783" class="Stroke-124"></path>
                                    <path d="M399.1318,290.5678 L352.1878,337.5118" class="Stroke-125"></path>
                                    <path d="M615.1376,74.562 L474.4546,215.244" class="Stroke-126"></path>
                                    <path d="M253.6757,436.0229 L309.6657,380.0339" class="Stroke-127"></path>
                                    <path d="M627.2802,72.7407 L477.5082,222.5127" class="Stroke-128"></path>
                                    <path d="M320.1157,379.9047 L293.2577,406.7617" class="Stroke-129"></path>
                                    <path d="M132.0385,567.9819 L180.1465,519.8739" class="Stroke-130"></path>
                                    <path d="M261.4804,438.5405 L287.5694,412.4505" class="Stroke-131"></path>
                                    <path d="M402.1913,297.8286 L354.0833,345.9366" class="Stroke-132"></path>
                                    <path d="M139.5493,570.7924 L189.0103,521.3314" class="Stroke-133"></path>
                                    <path d="M269.3227,441.019 L291.2887,419.053" class="Stroke-134"></path>
                                    <path d="M330.5019,379.8403 L305.5299,404.8123" class="Stroke-135"></path>
                                    <path d="M405.0019,305.3393 L355.5409,354.8013" class="Stroke-136"></path>
                                    <path d="M639.2158,71.1264 L480.3438,229.9984" class="Stroke-137"></path>
                                    <path d="M650.9843,69.6782 L482.9483,237.7142" class="Stroke-138"></path>
                                    <path d="M147.2919,573.3715 L198.3859,522.2765" class="Stroke-139"></path>
                                    <path d="M407.581,313.0825 L356.486,364.1775" class="Stroke-140"></path>
                                    <path d="M316.4667,404.1967 L340.8377,379.8257" class="Stroke-141"></path>
                                    <path d="M277.1992,443.4633 L297.8722,422.7903" class="Stroke-142"></path>
                                    <path d="M155.3149,575.6694 L208.3469,522.6384" class="Stroke-143"></path>
                                    <path d="M409.8788,321.1049 L356.8478,374.1369" class="Stroke-144"></path>
                                    <path d="M662.5859,68.3979 L485.2929,245.6919" class="Stroke-145"></path>
                                    <path d="M327.0576,403.9272 L351.1286,379.8552" class="Stroke-146"></path>
                                    <path d="M285.1083,445.8764 L306.0923,424.8924" class="Stroke-147"></path>
                                    <path d="M674.0253,67.2807 L487.3663,253.9397" class="Stroke-148"></path>
                                    <path d="M293.0488,448.2572 L314.5748,426.7312" class="Stroke-149"></path>
                                    <path d="M411.9013,329.4047 L337.5013,403.8047" class="Stroke-150"></path>
                                    <path d="M163.6142,577.6918 L219.0252,522.2808" class="Stroke-151"></path>
                                    <path d="M301.0175,450.6098 L323.0895,428.5378" class="Stroke-152"></path>
                                    <path d="M685.3212,66.3051 L489.1192,262.5081" class="Stroke-153"></path>
                                    <path d="M413.6298,337.9965 L347.8708,403.7555" class="Stroke-154"></path>
                                    <path d="M172.2065,579.4203 L230.6005,521.0263" class="Stroke-155"></path>
                                    <path d="M309.0131,452.935 L331.6361,430.312" class="Stroke-156"></path>
                                    <path d="M352.3823,409.5658 L415.0103,346.9368" class="Stroke-157"></path>
                                    <path d="M181.1469,580.8012 L243.3989,518.5492" class="Stroke-158"></path>
                                    <path d="M696.4736,65.4741 L490.5456,271.4031" class="Stroke-160"></path>
                                    <path d="M707.4863,64.7827 L491.5613,280.7087" class="Stroke-161"></path>
                                    <path d="M340.2153,432.0541 L317.0363,455.2331" class="Stroke-162"></path>
                                    <path d="M190.4482,581.8217 L258.0252,514.2447" class="Stroke-163"></path>
                                    <path d="M347.2958,424.974 L416.0308,356.239" class="Stroke-165"></path>
                                    <path d="M200.1474,582.4438 L276.1664,506.4238" class="Stroke-166"></path>
                                    <path d="M718.372,64.2192 L492.272,290.3192" class="Stroke-168"></path>
                                    <path d="M325.0854,457.5053 L416.6534,365.9383" class="Stroke-169"></path>
                                    <path d="M416.8369,376.0746 L210.3019,582.6106" class="Stroke-170"></path>
                                    <path d="M656.1132,136.7983 L729.1322,63.7803" class="Stroke-172"></path>
                                    <path d="M612.9863,179.9252 L492.9253,299.9862" class="Stroke-173"></path>
                                    <path d="M422.289,380.9447 L428.759,374.4747" class="Stroke-174"></path>
                                    <path d="M607.664,195.5688 L493.571,309.6628" class="Stroke-175"></path>
                                    <path d="M739.7685,63.4643 L673.8455,129.3883" class="Stroke-176"></path>
                                    <path d="M422.289,380.9447 L220.977,582.2567" class="Stroke-177"></path>
                                    <path d="M428.7587,374.475 L436.2827,366.95" class="Stroke-179"></path>
                                    <path d="M750.2851,63.27 L688.4761,125.079" class="Stroke-180"></path>
                                    <path d="M232.3105,581.2446 L446.3415,367.2126" class="Stroke-181"></path>
                                    <path d="M605.0644,208.4907 L494.2074,319.3477" class="Stroke-183"></path>
                                    <path d="M603.704,220.1723 L486.516,337.3593" class="Stroke-184"></path>
                                    <path d="M244.3994,579.477 L412.6884,411.188" class="Stroke-185"></path>
                                    <path d="M456.4003,367.476 L419.3263,404.55" class="Stroke-186"></path>
                                    <path d="M760.6816,63.1948 L701.6196,122.2568" class="Stroke-187"></path>
                                    <path d="M257.4545,576.7436 L409.4545,424.7426" class="Stroke-188"></path>
                                    <path d="M603.1738,231.0229 L478.0318,356.1659" class="Stroke-189"></path>
                                    <path d="M429.0644,405.1332 L466.4594,367.7382" class="Stroke-190"></path>
                                    <path d="M770.9667,63.2309 L713.8797,120.3179" class="Stroke-191"></path>
                                    <path d="M271.79,572.7289 L406.036,438.4829" class="Stroke-192"></path>
                                    <path d="M438.7841,405.7348 L603.2511,241.2678" class="Stroke-193"></path>
                                    <path d="M823.3427,21.1762 L843.8477,0.6702" class="Stroke-194"></path>
                                    <path d="M781.1415,63.3774 L725.5025,119.0164" class="Stroke-196"></path>
                                    <path d="M448.4697,406.3705 L603.7877,251.0525" class="Stroke-197"></path>
                                    <path d="M791.206,63.6342 L736.652,118.1882" class="Stroke-198"></path>
                                    <path d="M288.0829,566.7572 L411.3159,443.5242" class="Stroke-199"></path>
                                    <path d="M852.0634,2.7768 L825.6374,29.2028" class="Stroke-200"></path>
                                    <path d="M307.7177,557.4438 L420.7577,444.4038" class="Stroke-202"></path>
                                    <path d="M801.163,63.9985 L747.436,117.7255" class="Stroke-203"></path>
                                    <path d="M457.8593,407.3012 L604.6883,260.4722" class="Stroke-204"></path>
                                    <path d="M858.7265,6.434 L836.5495,28.612" class="Stroke-205"></path>
                                    <path d="M385.1357,490.3471 L430.9617,444.5211" class="Stroke-206"></path>
                                    <path d="M757.8984,117.5834 L811.0104,64.4724" class="Stroke-207"></path>
                                    <path d="M841.3925,34.0903 L845.5125,29.9703" class="Stroke-208"></path>
                                    <path d="M337.5698,537.9125 L374.5398,500.9425" class="Stroke-209"></path>
                                    <path d="M465.9413,409.5414 L605.8823,269.5994" class="Stroke-210"></path>
                                    <path d="M374.54,500.9428 L385.136,490.3468" class="Stroke-211"></path>
                                    <path d="M845.5126,29.9702 L865.0716,10.4112" class="Stroke-212"></path>
                                    <path d="M841.3925,34.0903 L834.4135,41.0693" class="Stroke-213"></path>
                                    <path d="M836.6191,49.184 L873.1701,12.634" class="Stroke-214"></path>
                                    <path d="M393.3095,492.4946 L442.8485,442.9556" class="Stroke-215"></path>
                                    <path d="M820.749,65.0541 L768.101,117.7031" class="Stroke-216"></path>
                                    <path d="M469.7831,416.0199 L607.3341,278.4699" class="Stroke-217"></path>
                                    <path d="M401.4658,494.6596 L609.0098,287.1156" class="Stroke-218"></path>
                                    <path d="M830.372,65.7534 L778.078,118.0474" class="Stroke-219"></path>
                                    <path d="M847.8115,48.3139 L881.5385,14.5869" class="Stroke-220"></path>
                                    <path d="M409.6005,496.8461 L610.8635,295.5831" class="Stroke-221"></path>
                                    <path d="M890.6328,15.8139 L847.5478,58.8989" class="Stroke-222"></path>
                                    <path d="M787.8574,118.5893 L839.8694,66.5773" class="Stroke-223"></path>
                                    <path d="M899.7421,17.0258 L797.4631,119.3048" class="Stroke-224"></path>
                                    <path d="M417.705,499.0629 L612.9,303.8679" class="Stroke-225"></path>
                                    <path d="M424.9677,502.1215 L615.0717,312.0175" class="Stroke-226"></path>
                                    <path d="M908.8554,18.2338 L806.9134,120.1758" class="Stroke-227"></path>
                                    <path d="M427.4081,510.0024 L617.3921,320.0184" class="Stroke-228"></path>
                                    <path d="M919.3661,18.0444 L816.2201,121.1904" class="Stroke-229"></path>
                                    <path d="M925.3173,22.4145 L825.3953,122.3365" class="Stroke-230"></path>
                                    <path d="M434.5917,513.141 L619.8257,327.906" class="Stroke-231"></path>
                                    <path d="M867.2421,90.811 L834.4481,123.605" class="Stroke-232"></path>
                                    <path d="M875.4609,82.5922 L922.7149,35.3382" class="Stroke-233"></path>
                                    <path d="M447.5683,510.4848 L622.3773,335.6758" class="Stroke-234"></path>
                                    <path d="M869.5615,98.8129 L843.3835,124.9909" class="Stroke-235"></path>
                                    <path d="M931.3544,37.02 L878.5644,89.81" class="Stroke-236"></path>
                                    <path d="M458.4492,509.9252 L625.0272,343.3472" class="Stroke-237"></path>
                                    <path d="M871.6689,107.0268 L852.2049,126.4908" class="Stroke-238"></path>
                                    <path d="M466.7802,511.9155 L627.7722,350.9235" class="Stroke-239"></path>
                                    <path d="M939.9951,38.7006 L881.9871,96.7086" class="Stroke-240"></path>
                                    <path d="M474.8632,514.1537 L497.1752,491.8417" class="Stroke-241"></path>
                                    <path d="M497.1757,491.8422 L500.1537,488.8632" class="Stroke-242"></path>
                                    <path d="M500.1533,488.8637 L630.6103,358.4077" class="Stroke-243"></path>
                                    <path d="M873.4755,115.5414 L860.9125,128.1044" class="Stroke-244"></path>
                                    <path d="M948.621,40.3959 L885.411,103.6059" class="Stroke-245"></path>
                                    <path d="M874.7578,124.5805 L869.4938,129.8445" class="Stroke-246"></path>
                                    <path d="M484.7704,514.5678 L495.1934,504.1448" class="Stroke-247"></path>
                                    <path d="M956.58,42.7592 L888.834,110.5042" class="Stroke-248"></path>
                                    <path d="M498.9911,500.3471 L633.5231,365.8151" class="Stroke-249"></path>
                                    <path d="M498.9911,500.3471 L495.1931,504.1451" class="Stroke-250"></path>
                                    <path d="M963.8935,45.7661 L892.2575,117.4021" class="Stroke-251"></path>
                                    <path d="M498.2294,511.4301 L636.5214,373.1381" class="Stroke-252"></path>
                                    <path d="M970.6943,49.2866 L895.6813,124.3006" class="Stroke-253"></path>
                                    <path d="M503.4335,516.5473 L639.5875,380.3933" class="Stroke-254"></path>
                                    <path d="M518.6191,511.683 L642.7231,387.579" class="Stroke-255"></path>
                                    <path d="M977.0234,53.2787 L899.1044,131.1977" class="Stroke-256"></path>
                                    <path d="M537.2119,503.4115 L645.9269,394.6965" class="Stroke-257"></path>
                                    <path d="M982.9042,57.7192 L902.5282,138.0952" class="Stroke-258"></path>
                                    <path d="M555.4931,495.4526 L649.1871,401.7576" class="Stroke-259"></path>
                                    <path d="M988.3437,62.601 L905.7607,145.184" class="Stroke-260"></path>
                                    <path d="M993.332,67.935 L909.119,152.147" class="Stroke-261"></path>
                                    <path d="M565.4257,495.8412 L652.5137,408.7532" class="Stroke-262"></path>
                                    <path d="M575.3583,496.2299 L655.8903,415.6969" class="Stroke-263"></path>
                                    <path d="M997.8769,73.7114 L912.5539,159.0344" class="Stroke-264"></path>
                                    <path d="M1001.9687,79.9399 L915.9887,165.9209" class="Stroke-265"></path>
                                    <path d="M585.291,496.6186 L659.328,422.5806" class="Stroke-266"></path>
                                    <path d="M1005.6064,86.6235 L919.4224,172.8075" class="Stroke-267"></path>
                                    <path d="M595.2236,497.0072 L662.8136,429.4162" class="Stroke-268"></path>
                                    <path d="M605.1562,497.3959 L666.3542,436.1969" class="Stroke-269"></path>
                                    <path d="M1009.0195,93.5317 L922.8595,179.6927" class="Stroke-270"></path>
                                    <path d="M615.0888,497.7846 L669.9428,442.9306" class="Stroke-271"></path>
                                    <path d="M1012.4277,100.4448 L926.2947,186.5778" class="Stroke-272"></path>
                                    <path d="M1015.829,107.3647 L961.344,161.8507" class="Stroke-273"></path>
                                    <path d="M954.4902,168.7036 L929.7322,193.4616" class="Stroke-274"></path>
                                    <path d="M625.0214,498.1733 L673.5794,449.6143" class="Stroke-275"></path>
                                    <path d="M930.7636,202.7524 L877.6136,255.9014" class="Stroke-276"></path>
                                    <path d="M930.7636,202.7524 L933.1696,200.3454" class="Stroke-277"></path>
                                    <path d="M634.954,498.5619 L677.267,456.2489" class="Stroke-278"></path>
                                    <path d="M1019.2226,114.2924 L970.0036,163.5114" class="Stroke-279"></path>
                                    <path d="M957.705,175.81 L933.17,200.345" class="Stroke-280"></path>
                                    <path d="M1022.6074,121.2299 L978.5654,165.2709" class="Stroke-281"></path>
                                    <path d="M644.8867,498.9496 L681.0007,462.8356" class="Stroke-282"></path>
                                    <path d="M960.9199,182.9174 L862.6659,281.1704" class="Stroke-283"></path>
                                    <path d="M1025.9785,128.1791 L986.9025,167.2561" class="Stroke-284"></path>
                                    <path d="M654.8193,499.3383 L684.7823,469.3753" class="Stroke-285"></path>
                                    <path d="M975.4697,178.6879 L854.5157,299.6419" class="Stroke-286"></path>
                                    <path d="M1029.332,135.1469 L993.55,170.9299" class="Stroke-287"></path>
                                    <path d="M664.7519,499.727 L688.6119,475.868" class="Stroke-288"></path>
                                    <path d="M849.2421,315.2368 L991.1261,173.3528" class="Stroke-289"></path>
                                    <path d="M674.6845,500.1156 L692.4915,482.3086" class="Stroke-290"></path>
                                    <path d="M1032.6699,142.1303 L845.6219,329.1793" class="Stroke-291"></path>
                                    <path d="M1035.7715,149.35 L843.2035,341.918" class="Stroke-292"></path>
                                    <path d="M684.6171,500.5043 L696.4241,488.6983" class="Stroke-293"></path>
                                    <path d="M841.6933,353.7494 L925.1863,270.2574" class="Stroke-294"></path>
                                    <path d="M945.1718,250.2709 L1038.6258,156.8179" class="Stroke-295"></path>
                                    <path d="M840.8925,364.8715 L904.8755,300.8895" class="Stroke-296"></path>
                                    <path d="M1041.2637,164.5014 L957.5237,248.2404" class="Stroke-297"></path>
                                    <path d="M840.6572,375.4291 L896.9352,319.1501" class="Stroke-298"></path>
                                    <path d="M983.6874,232.3989 L960.9684,255.1179" class="Stroke-299"></path>
                                    <path d="M1050.3447,165.7416 L994.0797,222.0056" class="Stroke-300"></path>
                                    <path d="M840.9316,385.476 L892.3106,334.096" class="Stroke-301"></path>
                                    <path d="M986.956,239.4506 L964.415,261.9916" class="Stroke-302"></path>
                                    <path d="M1060.3916,166.0151 L1009.0196,217.3881" class="Stroke-303"></path>
                                    <path d="M1069.9883,166.7407 L1018.7203,218.0087" class="Stroke-304"></path>
                                    <path d="M990.2304,246.4985 L967.8634,268.8655" class="Stroke-305"></path>
                                    <path d="M841.6562,395.0727 L889.5292,347.1997" class="Stroke-306"></path>
                                    <path d="M1079.1924,167.8578 L1020.1674,226.8818" class="Stroke-307"></path>
                                    <path d="M993.5097,253.5395 L971.3127,275.7375" class="Stroke-308"></path>
                                    <path d="M842.7734,404.2768 L887.9464,359.1038" class="Stroke-309"></path>
                                    <path d="M996.7968,260.5737 L974.7638,282.6077" class="Stroke-310"></path>
                                    <path d="M844.2363,413.1352 L887.2853,370.0862" class="Stroke-311"></path>
                                    <path d="M1088.0508,169.3207 L1021.1918,236.1797" class="Stroke-312"></path>
                                    <path d="M1000.0927,267.6 L978.2157,289.476" class="Stroke-313"></path>
                                    <path d="M1096.5957,171.0971 L1055.2777,212.4141" class="Stroke-314"></path>
                                    <path d="M846.0126,421.6791 L887.3316,380.3611" class="Stroke-315"></path>
                                    <path d="M1052.7334,214.9594 L1022.1134,245.5784" class="Stroke-316"></path>
                                    <path d="M1003.3974,274.6157 L981.6704,296.3437" class="Stroke-317"></path>
                                    <path d="M848.1113,429.9028 L887.9603,390.0538" class="Stroke-318"></path>
                                    <path d="M1104.8184,173.1948 L1064.9744,213.0388" class="Stroke-319"></path>
                                    <path d="M1054.0215,223.9926 L1023.0315,254.9826" class="Stroke-320"></path>
                                    <path d="M1055.1064,233.2289 L1023.9324,264.4029" class="Stroke-321"></path>
                                    <path d="M1112.7783,175.5571 L1074.1533,214.1821" class="Stroke-322"></path>
                                    <path d="M850.4726,437.8627 L889.0866,399.2477" class="Stroke-323"></path>
                                    <path d="M985.1279,303.2075 L1006.7159,281.6195" class="Stroke-324"></path>
                                    <path d="M1055.9814,242.6743 L1024.8004,273.8563" class="Stroke-325"></path>
                                    <path d="M853.0917,445.5639 L890.6757,407.9799" class="Stroke-326"></path>
                                    <path d="M1120.4795,178.1772 L1082.8925,215.7642" class="Stroke-327"></path>
                                    <path d="M988.5878,310.0688 L1010.0528,288.6038" class="Stroke-328"></path>
                                    <path d="M1056.6699,252.308 L1025.6079,283.37" class="Stroke-329"></path>
                                    <path d="M992.0507,316.9272 L1013.4137,295.5642" class="Stroke-330"></path>
                                    <path d="M1127.9277,181.0502 L1091.2347,217.7422" class="Stroke-331"></path>
                                    <path d="M855.9658,453.0121 L892.6588,416.3181" class="Stroke-332"></path>
                                    <path d="M859.0556,460.2426 L895.0026,424.2966" class="Stroke-333"></path>
                                    <path d="M1057.3613,261.9379 L1026.2983,293.0009" class="Stroke-334"></path>
                                    <path d="M995.5175,323.7817 L1016.8205,302.4787" class="Stroke-335"></path>
                                    <path d="M1135.1582,184.1401 L1099.2162,220.0831" class="Stroke-336"></path>
                                    <path d="M1142.1484,187.4721 L1106.8634,222.7571" class="Stroke-337"></path>
                                    <path d="M998.9882,330.6322 L1020.3382,309.2822" class="Stroke-338"></path>
                                    <path d="M862.3876,467.2328 L897.6786,431.9418" class="Stroke-339"></path>
                                    <path d="M1058.0918,271.5287 L1026.7208,302.8997" class="Stroke-340"></path>
                                    <path d="M1058.8564,281.0854 L1002.4644,337.4764" class="Stroke-341"></path>
                                    <path d="M1148.9463,190.9955 L1114.2003,225.7415" class="Stroke-342"></path>
                                    <path d="M865.9111,474.0307 L900.6631,439.2787" class="Stroke-343"></path>
                                    <path d="M869.6601,480.603 L903.9371,446.326" class="Stroke-344"></path>
                                    <path d="M1155.5176,194.7446 L1121.2466,229.0156" class="Stroke-345"></path>
                                    <path d="M1059.6514,290.6118 L1005.9494,344.3138" class="Stroke-346"></path>
                                    <path d="M1161.9131,198.6713 L1128.0171,232.5663" class="Stroke-347"></path>
                                    <path d="M1060.4727,300.1118 L1009.4447,351.1398" class="Stroke-348"></path>
                                    <path d="M873.5869,486.9975 L907.4859,453.0985" class="Stroke-349"></path>
                                    <path d="M1168.0938,202.812 L1134.5268,236.378" class="Stroke-350"></path>
                                    <path d="M1061.3164,309.5893 L1012.9544,357.9513" class="Stroke-351"></path>
                                    <path d="M877.7275,493.1781 L911.2965,459.6091" class="Stroke-352"></path>
                                    <path d="M1174.1055,207.1215 L1140.7835,240.4435" class="Stroke-353"></path>
                                    <path d="M882.037,499.1899 L915.358,465.8689" class="Stroke-354"></path>
                                    <path d="M1062.1807,319.0463 L1016.4937,364.7333" class="Stroke-355"></path>
                                    <path d="M1063.0625,328.4858 L1020.1555,371.3928" class="Stroke-356"></path>
                                    <path d="M886.5488,504.9994 L919.6628,471.8854" class="Stroke-357"></path>
                                    <path d="M1179.9141,211.6332 L1146.7961,244.7522" class="Stroke-358"></path>
                                    <path d="M1063.96,337.9096 L1024.576,377.2936" class="Stroke-359"></path>
                                    <path d="M1185.5557,216.3139 L1152.5707,249.2989" class="Stroke-360"></path>
                                    <path d="M891.2294,510.6401 L924.2074,477.6611" class="Stroke-361"></path>
                                    <path d="M1064.8682,347.3227 L1029.9442,382.2467" class="Stroke-362"></path>
                                    <path d="M896.1005,516.0903 L928.9915,483.1993" class="Stroke-363"></path>
                                    <path d="M1191.0059,221.185 L1158.1109,254.08" class="Stroke-364"></path>
                                    <path d="M1196.2842,226.228 L1163.4212,259.091" class="Stroke-365"></path>
                                    <path d="M1065.7842,356.728 L1036.1292,386.383" class="Stroke-366"></path>
                                    <path d="M901.1435,521.3686 L934.0055,488.5066" class="Stroke-367"></path>
                                    <path d="M1066.7031,366.1303 L1043.0391,389.7933" class="Stroke-368"></path>
                                    <path d="M1201.3799,231.4536 L1168.4999,264.3336" class="Stroke-369"></path>
                                    <path d="M906.3691,526.4643 L939.2501,493.5833" class="Stroke-370"></path>
                                    <path d="M911.7734,531.3813 L944.7254,498.4293" class="Stroke-371"></path>
                                    <path d="M1206.2969,236.8578 L1173.3489,269.8058" class="Stroke-372"></path>
                                    <path d="M1067.6143,375.5405 L1050.6263,392.5285" class="Stroke-373"></path>
                                    <path d="M917.3544,536.1215 L950.4324,503.0435" class="Stroke-374"></path>
                                    <path d="M1068.4941,384.9819 L1058.8691,394.6069" class="Stroke-375"></path>
                                    <path d="M1211.0371,242.4389 L1177.9641,275.5119" class="Stroke-376"></path>
                                    <path d="M1215.5889,248.2084 L1182.3429,281.4544" class="Stroke-377"></path>
                                    <path d="M923.124,540.6733 L956.376,507.4213" class="Stroke-378"></path>
                                    <path d="M929.0673,545.0512 L962.5623,511.5562" class="Stroke-379"></path>
                                    <path d="M1219.9668,254.1518 L1186.4748,287.6438" class="Stroke-380"></path>
                                    <path d="M935.2109,549.2289 L968.9969,515.4429" class="Stroke-381"></path>
                                    <path d="M1224.1445,260.2953 L1190.3575,294.0833" class="Stroke-382"></path>
                                    <path d="M941.5312,553.2299 L975.6912,519.0699" class="Stroke-383"></path>
                                    <path d="M1228.1455,266.6157 L1193.9815,300.7797" class="Stroke-384"></path>
                                    <path d="M948.0654,557.017 L982.6574,522.425" class="Stroke-385"></path>
                                    <path d="M1231.9326,273.1498 L1197.3346,307.7478" class="Stroke-386"></path>
                                    <path d="M1235.5342,279.8696 L1200.4052,314.9996" class="Stroke-387"></path>
                                    <path d="M954.7851,560.6186 L989.9101,525.4946" class="Stroke-388"></path>
                                    <path d="M1238.9092,286.8159 L1203.1722,322.5529" class="Stroke-389"></path>
                                    <path d="M961.7314,563.9936 L997.4644,528.2606" class="Stroke-390"></path>
                                    <path d="M968.8828,567.1645 L1005.3478,530.6985" class="Stroke-391"></path>
                                    <path d="M1242.0801,293.9672 L1205.6161,330.4312" class="Stroke-392"></path>
                                    <path d="M1245.0107,301.3569 L1207.7007,338.6669" class="Stroke-393"></path>
                                    <path d="M976.2724,570.0951 L1013.5844,532.7831" class="Stroke-394"></path>
                                    <path d="M983.8994,572.7905 L1022.2094,534.4795" class="Stroke-395"></path>
                                    <path d="M1247.7061,308.9838 L1209.3961,347.2928" class="Stroke-396"></path>
                                    <path d="M991.7763,575.2348 L1031.2613,535.7488" class="Stroke-397"></path>
                                    <path d="M1250.1504,316.8608 L1210.6644,356.3458" class="Stroke-398"></path>
                                    <path d="M999.9374,577.394 L1040.7934,536.539" class="Stroke-399"></path>
                                    <path d="M1252.3096,325.0219 L1211.4536,365.8779" class="Stroke-400"></path>
                                    <path d="M1254.1904,333.4623 L1211.6664,375.9863" class="Stroke-401"></path>
                                    <path d="M1008.3779,579.2748 L1050.9019,536.7518" class="Stroke-402"></path>
                                    <path d="M1017.1367,580.8383 L1061.6597,536.3143" class="Stroke-403"></path>
                                    <path d="M1255.7539,342.2211 L1211.2299,386.7451" class="Stroke-405"></path>
                                    <path d="M1026.25,582.0453 L1073.271,535.0243" class="Stroke-407"></path>
                                    <path d="M1256.9609,351.3344 L1209.9399,398.3554" class="Stroke-409"></path>
                                    <path d="M1035.7383,582.8793 L1085.9773,532.6403" class="Stroke-411"></path>
                                    <path d="M1257.7949,360.8217 L1207.5549,411.0617" class="Stroke-413"></path>
                                    <path d="M1258.209,370.7299 L1203.541,425.3969" class="Stroke-415"></path>
                                    <path d="M1045.6455,583.2924 L1100.3125,528.6254" class="Stroke-417"></path>
                                    <path d="M1056.0322,583.227 L1117.3512,521.909" class="Stroke-419"></path>
                                    <path d="M1258.1426,381.1166 L1196.8246,442.4356" class="Stroke-421"></path>
                                    <path d="M1257.5137,392.0668 L1183.1617,466.4188" class="Stroke-423"></path>
                                    <path d="M1066.9824,582.599 L1141.3344,508.246" class="Stroke-425"></path>
                                    <path d="M1256.2119,403.6908 L1078.6069,581.2958" class="Stroke-427"></path>
                                    <path d="M1091.0488,579.1742 L1254.0898,416.1342" class="Stroke-430"></path>
                                    <path d="M1104.6133,575.9311 L1250.8473,429.6981" class="Stroke-431"></path>
                                    <path d="M1119.6943,571.1713 L1246.0873,444.7783" class="Stroke-432"></path>
                                    <path d="M1137.2139,563.974 L1238.8899,462.298" class="Stroke-433"></path>
                                    <path d="M1159.7676,551.7406 L1226.6566,484.8526" class="Stroke-434"></path>
                                 </g>
                                 <g class="bike" transform="translate(1.000000, 0.711000)" stroke="#00D2FF">
                                    <path d="M531.5859,92.0004 C699.8999,48.0094 850.0959,68.1524 850.0959,68.1524 C850.0959,68.9064 862.7189,80.0214 862.7189,80.0214 C862.7189,80.0214 873.6469,110.7314 874.0229,130.7034 C874.0229,130.7034 640.7609,74.4814 607.3229,191.6784 C578.8459,291.4874 668.1259,445.5684 695.2429,489.0894 C698.3699,494.1064 694.6169,500.5764 688.7109,500.3454 L553.9819,495.0734" class="Stroke-435" stroke-width="2"></path>
                                    <path d="M317.1035,61.1762 C317.1035,61.1762 311.5385,62.6742 316.0335,70.5942 C320.5285,78.5152 349.4255,129.4592 399.9425,122.3962 C450.4595,115.3322 471.8655,102.2752 493.2705,112.5492 C514.6755,122.8232 546.8265,137.0912 580.3905,128.3892 C597.7295,123.8942 609.2885,119.1852 606.2915,109.9812 C603.2945,100.7772 592.5915,100.7772 583.1735,102.2752 C573.7545,103.7732 546.9985,102.0612 531.5855,92.0002 C516.1745,81.9402 516.1745,78.3002 508.2545,81.0832 C500.3335,83.8652 401.6555,115.5462 364.4095,91.5722 C327.1645,67.5982 321.8125,59.2492 317.1035,61.1762 Z" class="Stroke-437" stroke-width="2"></path>
                                    <path d="M601.3867,112.3774 C601.3867,109.3144 598.9037,106.8314 595.8407,106.8314 C592.7777,106.8314 590.2947,109.3144 590.2947,112.3774 C590.2947,115.4404 592.7777,117.9234 595.8407,117.9234 C598.9037,117.9234 601.3867,115.4404 601.3867,112.3774 Z" class="Stroke-439" stroke-width="0.75"></path>
                                    <path d="M483.9091,109.4721 C483.9091,109.4721 430.3391,141.0131 430.0441,145.4451 C429.7481,149.8761 485.5881,202.1701 491.2011,284.0091 C496.8141,365.8481 497.4051,386.0521 497.4051,386.0521" class="Stroke-441" stroke-width="2"></path>
                                    <path d="M241.9619,373.0561 C251.2859,377.1481 272.5699,380.6201 308.9099,380.0301 C345.2509,379.4391 461.9519,379.4391 525.1779,389.7801 C588.4029,400.1201 579.4159,398.4871 593.1309,419.0291 C601.2989,431.2651 614.6979,459.5051 614.6979,459.5051 C614.6979,459.5051 632.1299,490.5271 598.1529,490.2321 C564.1769,489.9361 462.6019,494.1651 364.1589,468.3691 C273.2729,444.5521 186.5819,416.4231 166.5849,399.9641 C165.1189,398.7581 166.0109,396.3741 167.9089,396.3921 C175.6439,396.4671 189.9819,396.1121 189.5499,392.4391 C188.9589,387.4161 188.3849,374.4161 189.5579,372.3481 C190.7319,370.2811 207.2759,358.4621 215.8449,359.9401 C215.8449,359.9401 229.3389,367.5171 241.9619,373.0561 Z" class="Stroke-443" stroke-width="2"></path>
                                    <path d="M472.2109,486.519 C472.0209,487.423 475.7709,492.877 468.2699,492.877 C460.7699,492.877 395.9949,480.264 395.9949,480.264 C395.9949,480.264 356.2779,473.105 352.3569,473.787 C348.4369,474.468 345.3689,473.275 347.2439,477.537 C349.1189,481.798 351.5049,482.093 357.6419,483.309 C363.7779,484.525 417.1319,498.503 426.6779,501.571 C436.2239,504.639 467.5879,511.969 467.5879,511.969 C467.5879,511.969 492.9859,522.197 494.1799,501.401 C494.1799,501.401 496.6039,488.364 496.0939,488.332" class="Stroke-445" stroke-width="2"></path>
                                    <path d="M564.579,490.3256 C564.579,490.3256 524.692,508.2196 510.373,514.4836 C496.055,520.7486 497.405,508.3886 497.405,508.3886 L499.635,489.4686" class="Stroke-447" stroke-width="2"></path>
                                    <path d="M511.6396,507.7074 C511.6396,505.0314 509.4696,502.8624 506.7936,502.8624 C504.1186,502.8624 501.9486,505.0314 501.9486,507.7074 C501.9486,510.3844 504.1186,512.5534 506.7936,512.5534 C509.4696,512.5534 511.6396,510.3844 511.6396,507.7074 Z" class="Stroke-449" stroke-width="0.75"></path>
                                    <path d="M488.1415,502.8627 C488.1415,499.2307 485.1975,496.2867 481.5655,496.2867 C477.9345,496.2867 474.9905,499.2307 474.9905,502.8627 C474.9905,506.4937 477.9345,509.4377 481.5655,509.4377 C485.1975,509.4377 488.1415,506.4937 488.1415,502.8627 Z" class="Stroke-451" stroke-width="0.75"></path>
                                    <path d="M544.9765,463.3881 C544.9765,454.6331 537.8785,447.5351 529.1235,447.5351 C520.3695,447.5351 513.2715,454.6331 513.2715,463.3881 C513.2715,472.1441 520.3695,479.2411 529.1235,479.2411 C537.8785,479.2411 544.9765,472.1441 544.9765,463.3881 Z" class="Stroke-453" stroke-width="0.75"></path>
                                    <path d="M424.4745,500.8969 C423.8225,502.6199 424.6835,514.7339 435.4525,512.5529 C446.2195,510.3729 453.0445,508.4909 453.0445,508.4909" class="Stroke-455" stroke-width="2"></path>
                                    <path d="M493.5966,319.7075 C493.6506,320.5295 473.6686,364.4455 473.6686,364.4455 C473.6686,364.4455 467.6316,376.8455 480.3586,378.8035 C493.0836,380.7615 497.2536,381.3945 497.2536,381.3945" class="Stroke-457" stroke-width="2"></path>
                                    <path d="M487.1328,369.2504 C487.1328,366.3314 484.7668,363.9654 481.8478,363.9654 C478.9288,363.9654 476.5628,366.3314 476.5628,369.2504 C476.5628,372.1694 478.9288,374.5354 481.8478,374.5354 C484.7668,374.5354 487.1328,372.1694 487.1328,369.2504 Z" class="Stroke-459" stroke-width="0.75"></path>
                                    <path d="M299.7651,423.7113 C299.7651,423.7113 287.1351,420.7733 286.5471,412.2563 C285.9601,403.7373 308.2841,403.7373 367.3231,403.7373 C426.3621,403.7373 465.4291,405.5003 468.3661,411.9623 C471.3031,418.4243 461.9031,431.0553 454.5601,436.3423 C447.2171,441.6293 439.8741,447.7973 401.1011,442.8043 C362.3291,437.8113 299.7651,423.7113 299.7651,423.7113 Z" class="Stroke-461" stroke-width="2"></path>
                                    <path d="M440.4579,405.5434 C440.4579,405.5434 494.1359,405.5004 497.4049,417.5434 C497.4049,417.5434 500.4569,422.1214 487.1329,437.7044 C473.8079,453.2884 462.1949,460.5934 424.3119,456.9404 C386.4289,453.2884 349.0489,450.7804 297.6449,435.7194 C243.1379,419.7484 240.1379,411.5434 240.1379,411.5434 C238.9629,402.0184 340.2999,403.7374 340.2999,403.7374" class="Stroke-463"></path>
                                    <path d="M433.6494,116.2524 L448.7984,131.0854" class="Stroke-465" stroke-width="2"></path>
                                    <path d="M412.416,120.4467 L432.559,142.5297" class="Stroke-467" stroke-width="2"></path>
                                    <path d="M892.3661,36.2973 C891.9491,36.2973 869.2711,57.0263 869.2711,57.0263 C869.2711,57.0263 863.3581,64.7483 870.8021,72.1923 C878.2451,79.6353 886.2451,71.4963 886.2451,71.4963 L907.3921,51.1843 C907.3921,51.1843 911.1491,43.8103 905.1661,37.8273 C899.1831,31.8453 892.3661,36.2973 892.3661,36.2973 Z" class="Stroke-469" stroke-width="2"></path>
                                    <path d="M900.7138,34.7045 L915.4618,19.6005 C915.4618,19.6005 918.9408,16.8185 922.1398,19.6005 C925.3398,22.3845 923.9488,25.4445 922.1398,27.5315 C920.3308,29.6185 907.6428,41.3985 907.6428,41.3985" class="Stroke-471" stroke-width="2"></path>
                                    <path d="M915.4619,34.4877 L946.2089,40.4707 C946.2089,40.4707 984.4699,46.7317 1004.0869,86.3837 C1023.7039,126.0347 1029.8289,139.1327 1029.8289,139.1327 C1029.8289,139.1327 1050.7229,178.5957 1055.3649,247.8527 C1060.0079,317.1087 1069.2939,396.0387 1068.1329,396.0387 C1066.9729,396.0387 1031.7639,393.7167 1018.6089,370.5027 C1005.4539,347.2877 875.8409,86.5117 875.8409,86.5117 L870.8019,72.1917" class="Stroke-473" stroke-width="2"></path>
                                    <path d="M952.456,166.6088 C952.456,166.6088 949.036,160.0118 956.121,160.9898 C963.206,161.9658 983.972,166.6088 983.972,166.6088 C983.972,166.6088 1014.021,173.2048 1019.885,233.0598 C1025.748,292.9158 1029.413,326.8748 1019.885,310.2608 C1010.357,293.6488 952.456,166.6088 952.456,166.6088 Z" class="Stroke-475" stroke-width="2"></path>
                                    <path d="M1023.0654,148.6088 C1023.0654,143.0688 1018.5744,138.5778 1013.0334,138.5778 C1007.4934,138.5778 1003.0014,143.0688 1003.0014,148.6088 C1003.0014,154.1488 1007.4934,158.6398 1013.0334,158.6398 C1018.5744,158.6398 1023.0654,154.1488 1023.0654,148.6088 Z" class="Stroke-477"></path>
                                    <path d="M1016.996,148.6088 C1016.996,146.4208 1015.223,144.6458 1013.033,144.6458 C1010.845,144.6458 1009.071,146.4208 1009.071,148.6088 C1009.071,150.7968 1010.845,152.5718 1013.033,152.5718 C1015.223,152.5718 1016.996,150.7968 1016.996,148.6088 Z" class="Stroke-479" stroke-width="0.75"></path>
                                    <path d="M1055.293,381.1518 C1055.293,379.5308 1053.98,378.2158 1052.357,378.2158 C1050.736,378.2158 1049.422,379.5308 1049.422,381.1518 C1049.422,382.7738 1050.736,384.0878 1052.357,384.0878 C1053.98,384.0878 1055.293,382.7738 1055.293,381.1518 Z" class="Stroke-481" stroke-width="0.75"></path>
                                    <path d="M963.4482,60.0424 C963.4482,57.8544 961.6752,56.0794 959.4852,56.0794 C957.2972,56.0794 955.5232,57.8544 955.5232,60.0424 C955.5232,62.2304 957.2972,64.0054 959.4852,64.0054 C961.6752,64.0054 963.4482,62.2304 963.4482,60.0424 Z" class="Stroke-483" stroke-width="0.75"></path>
                                    <path d="M1060.3066,381.1518 C1060.3066,376.7618 1056.7476,373.2038 1052.3576,373.2038 C1047.9676,373.2038 1044.4096,376.7618 1044.4096,381.1518 C1044.4096,385.5428 1047.9676,389.1008 1052.3576,389.1008 C1056.7476,389.1008 1060.3066,385.5428 1060.3066,381.1518 Z" class="Stroke-485"></path>
                                    <path d="M969.5175,60.0424 C969.5175,54.5024 965.0265,50.0114 959.4855,50.0114 C953.9455,50.0114 949.4545,54.5024 949.4545,60.0424 C949.4545,65.5824 953.9455,70.0734 959.4855,70.0734 C965.0265,70.0734 969.5175,65.5824 969.5175,60.0424 Z" class="Stroke-487"></path>
                                    <path d="M915.4619,19.601 C915.4619,19.601 885.6659,15.672 879.1309,14.755 C872.5969,13.838 835.4519,0.196 835.1079,11.66 C834.7639,23.124 833.5029,24.156 846.4579,25.302 C859.4119,26.449 902.9629,32.402 902.9629,32.402" class="Stroke-489" stroke-width="2"></path>
                                    <path d="M857.9814,9.2631 C857.9214,8.6791 857.5784,2.8321 852.5344,3.1761 C847.4894,3.5201 839.5794,-1.5239 835.5664,0.9971 C831.5534,3.5201 827.8854,11.2011 824.3324,13.3791 C820.7774,15.5581 818.4844,16.0311 819.9754,19.7491 C821.4654,23.4681 834.9094,16.4751 834.9094,16.4751" class="Stroke-491" stroke-width="2"></path>
                                    <path d="M834.9091,18.3647 C834.9091,18.3647 822.9561,22.6657 821.9241,24.2707 C820.8921,25.8757 820.7771,29.6587 825.2491,28.7417 C829.7201,27.8247 836.3691,27.9927 839.8081,28.8837 C843.2481,29.7737 849.6531,30.8257 850.5781,25.7137" class="Stroke-493" stroke-width="2"></path>
                                    <path d="M857.9814,26.561 L844.2794,31.837 C844.2794,31.837 832.4714,39.632 833.7324,41.925 C834.9934,44.218 835.9564,49.034 835.9564,49.034 C835.9564,49.034 849.7824,48.001 851.5024,46.97 C853.2214,45.938 890.9274,30.781 890.9274,30.781" class="Stroke-495" stroke-width="2"></path>
                                    <path d="M848.4911,47.7045 C848.4911,47.7045 844.9681,52.9315 846.9161,58.8925 C848.8651,64.8535 867.3461,59.1915 867.3461,59.1915 C867.3461,59.1915 865.5851,44.5165 882.6761,34.1065" class="Stroke-497" stroke-width="2"></path>
                                    <path d="M845.4511,67.603 L853.1071,61.689" class="Stroke-499" stroke-width="2"></path>
                                    <path d="M864.1806,84.3588 L873.1906,78.9818" class="Stroke-501" stroke-width="2"></path>
                                    <path d="M993.6406,172.6108 C988.9466,173.7668 987.1436,174.3678 982.5836,175.8428 C974.8316,178.3528 967.2856,181.3158 959.9726,184.7018" class="Stroke-503" stroke-width="2"></path>
                                    <path d="M932.3242,201.4077 C876.6422,238.8297 840.0052,302.4037 840.0052,374.5357 C840.0052,489.6577 933.3292,582.9817 1048.4512,582.9817 C1163.5722,582.9817 1256.8972,489.6577 1256.8972,374.5357 C1256.8972,259.4137 1163.5722,166.0897 1048.4512,166.0897 C1046.2722,166.0897 1042.8572,166.0227 1040.6952,166.0897" class="Stroke-505" stroke-width="2"></path>
                                    <path d="M1014.4453,204.8676 C1000.8763,207.5716 987.8793,211.8636 975.6553,217.5416" class="Stroke-507" stroke-width="2"></path>
                                    <path d="M949.332,232.7153 C904.655,263.9983 875.442,315.8553 875.442,374.5343 C875.442,470.0843 952.9,547.5433 1048.451,547.5433 C1144.001,547.5433 1221.46,470.0843 1221.46,374.5343 C1221.46,279.2563 1144.441,201.9663 1049.267,201.5283" class="Stroke-509"></path>
                                    <path d="M1017.3212,215.2856 C1004.3672,217.8026 991.9652,221.8606 980.3102,227.2626" class="Stroke-511" stroke-width="2"></path>
                                    <path d="M953.7841,242.7709 C912.8621,272.2229 886.2171,320.2679 886.2171,374.5359 C886.2171,464.1349 958.8511,536.7699 1048.4511,536.7699 C1138.0511,536.7699 1210.6841,464.1349 1210.6841,374.5359 C1210.6841,285.8949 1139.5971,213.8579 1051.3211,212.3269" class="Stroke-513" stroke-width="2"></path>
                                    <path d="M403.8818,442.5375 C408.2528,430.2395 411.4728,417.3965 413.4088,404.1375" class="Stroke-515" stroke-width="2"></path>
                                    <path d="M387.4911,479.2406 C388.2971,477.8756 389.0871,476.4996 389.8611,475.1136" class="Stroke-517" stroke-width="2"></path>
                                    <path d="M415.3847,381.0658 C415.4507,378.8968 415.4857,376.7198 415.4857,374.5358 C415.4857,259.8038 322.4767,166.7958 207.7447,166.7958 C93.0137,166.7958 0.0057,259.8038 0.0057,374.5358 C0.0057,489.2668 93.0137,582.2758 207.7447,582.2758 C279.5087,582.2758 344.1167,544.8008 381.4387,489.4678" class="Stroke-519" stroke-width="2"></path>
                                    <path d="M380.663,380.1957 C380.724,378.3157 380.754,376.4287 380.754,374.5357 C380.754,278.9857 303.295,201.5267 207.745,201.5267 C112.195,201.5267 34.736,278.9857 34.736,374.5357 C34.736,470.0857 112.195,547.5447 207.745,547.5447 C269.767,547.5447 324.166,514.9087 354.707,465.8727" class="Stroke-521"></path>
                                    <path d="M368.8593,437.7045 C373.1073,426.8795 376.2953,415.5215 378.2963,403.7605" class="Stroke-523"></path>
                                    <path d="M369.8876,380.0317 C369.9486,378.2077 369.9796,376.3757 369.9796,374.5357 C369.9796,284.9357 297.3446,212.3017 207.7446,212.3017 C118.1456,212.3017 45.5116,284.9357 45.5116,374.5357 C45.5116,464.1357 118.1456,536.7697 207.7446,536.7697 C264.7336,536.7697 314.8596,507.3857 343.7976,462.9417" class="Stroke-525" stroke-width="2"></path>
                                    <path d="M355.769,379.5531 C355.825,377.8871 355.852,376.2151 355.852,374.5351 C355.852,292.7381 289.542,226.4281 207.745,226.4281 C125.948,226.4281 59.638,292.7381 59.638,374.5351 C59.638,456.3331 125.948,522.6431 207.745,522.6431 C258.15,522.6431 302.674,497.4641 329.425,458.9971" class="Stroke-527" stroke-width="0.75"></path>
                                    <path d="M358.0458,435.7192 C362.1908,425.5462 365.3338,414.8592 367.3508,403.7782" class="Stroke-529" stroke-width="2"></path>
                                    <path d="M217.4536,384.1196 C217.4536,389.4126 213.1626,393.7036 207.8696,393.7036 C202.5766,393.7036 198.2856,389.4126 198.2856,384.1196 C198.2856,378.8266 202.5766,374.5356 207.8696,374.5356 C213.1626,374.5356 217.4536,378.8266 217.4536,384.1196 Z" class="Stroke-531" stroke-width="0.75"></path>
                                    <path d="M220.2353,425.0697 C216.3203,426.2497 212.1693,426.8837 207.8693,426.8837 C190.6543,426.8837 175.8163,416.7127 169.0343,402.0507" class="Stroke-533" stroke-width="0.75"></path>
                                    <path d="M166.958,396.6108 C165.753,392.6598 165.105,388.4648 165.105,384.1198 C165.105,360.5018 184.251,341.3548 207.87,341.3548 C228.536,341.3548 245.778,356.0138 249.766,375.5018" class="Stroke-535" stroke-width="0.75"></path>
                                    <path d="M868.6855,58.5522 C868.6855,58.5522 875.8925,52.6562 882.2895,60.1972 C887.7035,66.5762 884.7555,72.0542 882.6755,74.0282" class="Stroke-537"></path>
                                    <path d="M875.1855,51.6352 C875.3295,51.5042 882.4205,49.0332 887.3145,55.0172 C892.7205,61.6262 890.7295,67.1892 890.7295,67.1892" class="Stroke-539"></path>
                                    <path d="M890.2763,37.3764 C890.4203,37.2454 897.5113,34.7744 902.4063,40.7574 C907.8113,47.3664 905.8203,52.9304 905.8203,52.9304" class="Stroke-541"></path>
                                    <path d="M1065.2373,395.7885 L1049.7583,249.3585 C1049.7583,249.3585 1044.8443,197.6585 1033.9553,173.1345 C1023.0653,148.6085 1023.0303,149.4105 1023.0303,149.4105" class="Stroke-543"></path>
                                    <path d="M1016.996,139.392 C1016.996,139.392 1004.917,115.539 998.44,105.042 C991.964,94.546 977.712,65.931 894.518,63.55" class="Stroke-545"></path>
                                    <path d="M886.2451,71.4965 C886.2451,71.4965 880.7331,77.1125 886.2451,89.0105 C891.7571,100.9085 1029.5391,371.9505 1029.5391,371.9505 C1029.5391,371.9505 1038.4601,389.6005 1048.4511,392.1625" class="Stroke-547"></path>
                                    <path d="M1001.6767,154.5571 C1002.1247,155.3891 1026.1767,187.7221 1032.7497,234.0341 C1039.3237,280.3451 1042.9207,316.4971 1044.4087,343.0891 C1045.8967,369.6811 1040.1997,371.4741 1023.0307,338.6081 C1005.8597,305.7421 935.6457,152.7641 928.1757,134.8371 C920.7057,116.9111 924.5907,113.3251 935.0477,114.5201 C945.5057,115.7151 961.9387,118.4041 961.9387,118.4041 C961.9387,118.4041 983.2687,120.4001 1001.6767,154.5571 Z" class="Stroke-549"></path>
                                    <path d="M521.3339,85.0385 C521.3339,85.0385 543.3779,103.6015 556.1399,110.5625 C568.9019,117.5235 573.5429,125.3135 553.4879,122.6625 C533.4339,120.0105 520.0079,113.3805 504.5939,108.5735 C489.1799,103.7675 478.7439,99.1375 442.4389,108.5735 C406.4739,117.9235 338.6159,113.8885 317.1039,61.1765" class="Stroke-551"></path>
                                    <path d="M854.9081,84.3588 C854.9081,84.3588 852.9711,78.9848 846.7711,78.9848 C842.2361,78.9848 836.7841,79.2098 833.8271,79.3488 C832.3261,79.4208 830.8701,79.7938 829.5201,80.4548 C826.0781,82.1398 819.6891,85.6598 819.5761,88.6008 C819.4211,92.6298 829.4941,98.9838 834.0651,99.2948 C838.6371,99.6038 853.9011,99.6808 854.9081,99.6038 C855.9161,99.5268 859.3251,99.2158 858.3181,95.0328 C858.2541,94.7658 858.1831,94.4908 858.1091,94.2078" class="Stroke-553" stroke-width="0.75"></path>
                                    <path d="M857.6562,92.5844 C857.5312,92.1604 857.4012,91.7304 857.2682,91.3024 C856.6952,89.4524 855.9142,87.2294 855.4502,85.9084" class="Stroke-555" stroke-width="0.75"></path>
                                    <path d="M845.6581,85.103 L838.8901,85.103 C838.3321,84.19 837.3341,83.575 836.1841,83.575 C834.4281,83.575 833.0031,84.999 833.0031,86.756 C833.0031,88.513 834.4281,89.938 836.1841,89.938 C837.3341,89.938 838.3321,89.323 838.8901,88.41 L845.6581,88.41 C846.5671,88.41 847.3111,87.666 847.3111,86.756 C847.3111,85.847 846.5671,85.103 845.6581,85.103 Z" class="Stroke-557" stroke-width="0.75"></path>
                                    <path d="M839.33,85.103 L836.49,85.103" class="Stroke-559" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M839.33,88.3832 L836.49,88.3832" class="Stroke-561" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M850.5654,92.2875 L843.7974,92.2875 C843.2394,91.3745 842.2414,90.7605 841.0914,90.7605 C839.3354,90.7605 837.9104,92.1835 837.9104,93.9415 C837.9104,95.6985 839.3354,97.1235 841.0914,97.1235 C842.2414,97.1235 843.2394,96.5085 843.7974,95.5955 L850.5654,95.5955 C851.4744,95.5955 852.2184,94.8505 852.2184,93.9415 C852.2184,93.0315 851.4744,92.2875 850.5654,92.2875 Z" class="Stroke-563" stroke-width="0.75"></path>
                                    <path d="M844.2382,92.2875 L841.3972,92.2875" class="Stroke-565" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M844.2382,95.5688 L841.3972,95.5688" class="Stroke-567" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M846.9794,85.7651 C846.9614,85.7471 849.9754,86.4661 855.6464,84.0591 C861.3184,81.6521 862.2774,81.1011 862.2774,81.1011" class="Stroke-569" stroke-width="0.5"></path>
                                    <path d="M847.3115,87.3852 C847.3115,87.3852 850.5865,87.8132 856.1775,85.4672 C861.7675,83.1202 862.9105,82.2842 862.9105,82.2842" class="Stroke-571" stroke-width="0.5"></path>
                                    <path d="M852.2187,93.3754 C852.2067,93.3544 854.8497,94.0294 860.5217,91.6224 L866.1937,89.2154" class="Stroke-573" stroke-width="0.5"></path>
                                    <path d="M852.1855,94.9477 C852.1855,94.9477 855.4615,95.3767 861.0515,93.0297 C866.6415,90.6837 866.553582,90.5387 866.553582,90.5387" class="Stroke-575" stroke-width="0.5"></path>
                                    <path d="M1006.623,347.5893 C1002.048,355.0443 999.41,363.8163 999.41,373.2033 C999.41,400.2873 1021.366,422.2433 1048.451,422.2433 C1075.535,422.2433 1097.491,400.2873 1097.491,373.2033 C1097.491,350.7573 1082.412,331.8333 1061.83,326.0103" class="Stroke-577" stroke-width="2"></path>
                                    <path d="M1000.8818,336.3295 C992.9748,346.5155 988.2668,359.3085 988.2668,373.2035 C988.2668,406.4415 1015.2118,433.3885 1048.4508,433.3885 C1081.6908,433.3885 1108.6358,406.4415 1108.6358,373.2035 C1108.6358,344.1955 1088.1148,319.9815 1060.7988,314.2865" class="Stroke-579" stroke-width="2"></path>
                                    <path d="M1089.6465,346.5854 C1089.6465,346.5854 1074.0985,352.8014 1077.0165,360.0324 C1079.9345,367.2634 1095.2525,358.5204 1095.2525,358.5204" class="Stroke-581" stroke-width="2"></path>
                                    <path d="M1084.9863,357.5268 C1084.9863,356.2658 1083.9643,355.2438 1082.7033,355.2438 C1081.4423,355.2438 1080.4203,356.2658 1080.4203,357.5268 C1080.4203,358.7888 1081.4423,359.8108 1082.7033,359.8108 C1083.9643,359.8108 1084.9863,358.7888 1084.9863,357.5268 Z" class="Stroke-583"></path>
                                    <path d="M1041.4844,421.6557 C1041.4844,421.6557 1047.7684,406.1357 1040.5314,403.2327 C1033.2944,400.3297 1028.9934,417.4347 1028.9934,417.4347" class="Stroke-585" stroke-width="2"></path>
                                    <path d="M1036.8184,410.7172 C1037.7284,411.5902 1039.1734,411.5612 1040.0474,410.6512 C1040.9214,409.7412 1040.8914,408.2952 1039.9814,407.4222 C1039.0714,406.5492 1037.6264,406.5782 1036.7534,407.4882 C1035.8794,408.3982 1035.9094,409.8432 1036.8184,410.7172 Z" class="Stroke-587"></path>
                                    <path d="M1088.6162,401.6723 C1088.6162,401.6723 1076.5762,390.0363 1071.1762,395.6613 C1065.7742,401.2863 1080.0272,411.6763 1080.0272,411.6763" class="Stroke-589" stroke-width="2"></path>
                                    <path d="M1076.7266,401.9047 C1077.8766,401.3877 1078.3906,400.0367 1077.8726,398.8857 C1077.3566,397.7357 1076.0046,397.2217 1074.8546,397.7387 C1073.7046,398.2567 1073.1906,399.6077 1073.7066,400.7587 C1074.2246,401.9087 1075.5766,402.4227 1076.7266,401.9047 Z" class="Stroke-591"></path>
                                    <path d="M1005.6513,395.3383 C1005.6513,395.3383 1021.6523,390.4073 1019.3323,382.9633 C1017.0113,375.5193 1001.0343,382.9873 1001.0343,382.9873" class="Stroke-593" stroke-width="2"></path>
                                    <path d="M1011.1845,384.8119 C1011.0815,386.0689 1012.0185,387.1709 1013.2755,387.2739 C1014.5325,387.3759 1015.6345,386.4409 1015.7375,385.1829 C1015.8395,383.9259 1014.9035,382.8249 1013.6465,382.7219 C1012.3895,382.6199 1011.2885,383.5549 1011.1845,384.8119 Z" class="Stroke-595"></path>
                                    <path d="M241.9619,373.0561 C241.9619,373.0561 279.3819,390.0731 312.8159,388.6671 C346.2509,387.2621 485.6969,394.0051 501.9479,395.6921 C518.1999,397.3771 542.3619,398.2201 552.1959,415.0771 C562.0299,431.9361 576.6399,461.7171 576.6399,461.7171 C576.6399,461.7171 591.8099,487.9971 558.9389,490.3101" class="Stroke-597" stroke-width="0.75"></path>
                                    <path d="M428.1181,381.5405 L428.1181,369.8455 C428.1181,368.3525 429.3481,367.1535 430.8411,367.1925 L467.4041,368.1485 C467.4041,368.1485 472.6461,368.3725 475.2901,360.8775" class="Stroke-599" stroke-width="2"></path>
                                    <path d="M897.2656,129.5629 L873.4126,140.7059 C872.4896,141.1369 872.0936,142.2389 872.5336,143.1599 L873.6836,145.5709 C874.1196,146.4859 875.2146,146.8739 876.1296,146.4379 L900.0106,135.0759" class="Stroke-601" stroke-width="2"></path>
                                    <path d="M882.1533,144.3129 L883.1653,146.5979 C883.5133,147.3859 884.4323,147.7469 885.2243,147.4049 L892.2463,144.3789 C893.0193,144.0459 893.9183,144.3809 894.2843,145.1389 L895.5203,147.6979 C895.8923,148.4659 896.8093,148.7979 897.5873,148.4439 L904.9943,145.0749" class="Stroke-603" stroke-width="2"></path>
                                    <path d="M889.0468,133.4018 L865.6218,84.3588" class="Stroke-605" stroke-width="2"></path>
                                    <path d="M879.0878,138.1479 L873.8918,127.6539" class="Stroke-607" stroke-width="2"></path>
                                    <path d="M352.666,403.7778 C352.666,403.7778 349.666,420.7328 342.314,432.8568" class="Stroke-609"></path>
                                 </g>
                              </g>
                           </g>
                        </svg>
                     </div>
                     <p>The City Racer gives you back your city. With its strong performance, CARBO GATTO leaves everything behind them. The slender design provides for true pleasure of driving and even brings a smile to the faces of first-time motorbike riders</p>
                     <div class="text-center"><a class="button" href="buy">Config your carbogatto</a></div>
                  </div>
               </div>
            </div>
         </div>
      </section>


<?php get_footer(); ?>
