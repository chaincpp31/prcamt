<!DOCTYPE html>
<html style="font-size: 16px;">

  <body class="u-body u-xl-mode">
    
  <?php include("header.php");?>
  <script>
    function counter() {
			var oTop;
			if ($('.counterUp').length !== 0) {
				oTop = $('.counterUp').offset().top - window.innerHeight;
			}
			if ($(window).scrollTop() > oTop) {
				$('.counterUp').each(function () {
					var $this = $(this),
						countTo = $this.attr('data-count');
					$({
						countNum: $this.text()
					}).animate({
						countNum: countTo
					}, {
						duration: 1000,
						easing: 'swing',
						step: function () {
							$this.text(Math.floor(this.countNum));
						},
						complete: function () {
							$this.text(this.countNum);
						}
					});
				});
			}
		}
		counter();
  </script>  
    
    <!-- popup more ani-->
        <div class="modal fade" id="myPopUpANI" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Animation and Visual effect</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <img src="images/openhouse/thaumatrope.jpg" alt="" class="u-expanded-width u-image u-image-contain u-image-default u-image-1" data-image-width="626" data-image-height="626">
                <p class="u-text u-text-palette-1-dark-2 u-text-4">สอนออกแบบคาแรคเตอร์อย่างง่าย, ถ่ายภาพกับคอสเพลย์เยอร์ และ ร่วมเรียนรู้ colour wheel ผ่านการทำ thaumatrope</p>
              </div>
              <div class="modal-footer">
              <a href="open_form.php" class="u-active-grey-25 u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-white u-btn u-btn-round u-button-style u-hover-grey-25 u-palette-3-base u-radius-50 u-text-active-white u-text-hover-white u-btn-6">ลงทะเบียน workshop</a>  
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade" id="myPopUpDG" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Digital Game</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <img src="images/openhouse/thaumatrope.jpg" alt="" class="u-expanded-width u-image u-image-contain u-image-default u-image-1" data-image-width="626" data-image-height="626">
                <p class="u-text u-text-palette-1-dark-2 u-text-4">สอนออกแบบคาแรคเตอร์อย่างง่าย, ถ่ายภาพกับคอสเพลย์เยอร์ และ ร่วมเรียนรู้ colour wheel ผ่านการทำ thaumatrope</p>
              </div>
              <div class="modal-footer">
              <a href="open_form.php" class="u-active-grey-25 u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-white u-btn u-btn-round u-button-style u-hover-grey-25 u-palette-3-base u-radius-50 u-text-active-white u-text-hover-white u-btn-6">ลงทะเบียน workshop</a>  
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade" id="myPopUpMMIT" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Modern Management Information Technology</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <img src="images/openhouse/thaumatrope.jpg" alt="" class="u-expanded-width u-image u-image-contain u-image-default u-image-1" data-image-width="626" data-image-height="626">
                <p class="u-text u-text-palette-1-dark-2 u-text-4">สอนออกแบบคาแรคเตอร์อย่างง่าย, ถ่ายภาพกับคอสเพลย์เยอร์ และ ร่วมเรียนรู้ colour wheel ผ่านการทำ thaumatrope</p>
              </div>
              <div class="modal-footer">
              <a href="open_form.php" class="u-active-grey-25 u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-white u-btn u-btn-round u-button-style u-hover-grey-25 u-palette-3-base u-radius-50 u-text-active-white u-text-hover-white u-btn-6">ลงทะเบียน workshop</a>  
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade" id="myPopUpDII" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Digital Industry Intigration</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <img src="images/openhouse/thaumatrope.jpg" alt="" class="u-expanded-width u-image u-image-contain u-image-default u-image-1" data-image-width="626" data-image-height="626">
                <p class="u-text u-text-palette-1-dark-2 u-text-4">สอนออกแบบคาแรคเตอร์อย่างง่าย, ถ่ายภาพกับคอสเพลย์เยอร์ และ ร่วมเรียนรู้ colour wheel ผ่านการทำ thaumatrope</p>
              </div>
              <div class="modal-footer">
              <a href="open_form.php" class="u-active-grey-25 u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-white u-btn u-btn-round u-button-style u-hover-grey-25 u-palette-3-base u-radius-50 u-text-active-white u-text-hover-white u-btn-6">ลงทะเบียน workshop</a>  
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade" id="myPopUpSE" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Software Engineer</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <img src="images/openhouse/thaumatrope.jpg" alt="" class="u-expanded-width u-image u-image-contain u-image-default u-image-1" data-image-width="626" data-image-height="626">
                <p class="u-text u-text-palette-1-dark-2 u-text-4">สอนออกแบบคาแรคเตอร์อย่างง่าย, ถ่ายภาพกับคอสเพลย์เยอร์ และ ร่วมเรียนรู้ colour wheel ผ่านการทำ thaumatrope</p>
              </div>
              <div class="modal-footer">
              <a href="open_form.php" class="u-active-grey-25 u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-white u-btn u-btn-round u-button-style u-hover-grey-25 u-palette-3-base u-radius-50 u-text-active-white u-text-hover-white u-btn-6">ลงทะเบียน workshop</a>  
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade" id="myPopUpCAMT_META" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">CAMT Metaverse</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
              <video width="300" height="240" controls autoplay muted>
              <source src="images/openhouse/meta.mp4" type="video/mp4">
              <source src="/movie.ogg" type="video/ogg" >go to camt
              </video>
                <!-- <img src="images/openhouse/thaumatrope.jpg" alt="" class="u-expanded-width u-image u-image-contain u-image-default u-image-1" data-image-width="626" data-image-height="626"> -->
                <p class="u-text u-text-palette-1-dark-2 u-text-4">สอนออกแบบคาแรคเตอร์อย่างง่าย, ถ่ายภาพกับคอสเพลย์เยอร์ และ ร่วมเรียนรู้ colour wheel ผ่านการทำ thaumatrope</p>
              </div>
              <div class="modal-footer">
              <a href="open_form.php" class="u-active-grey-25 u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-white u-btn u-btn-round u-button-style u-hover-grey-25 u-palette-3-base u-radius-50 u-text-active-white u-text-hover-white u-btn-6">ลงทะเบียน workshop</a>  
              </div>
            </div>
          </div>
        </div>
    <section class="u-align-center u-clearfix u-grey-15 u-section-5" id="carousel_56cf">
      <div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-xl u-sheet-1">
        <h4 class="u-text u-text-default u-text-palette-1-base u-text-1">OVERVIEW</h4>
        <h2 class="u-text u-text-default u-text-palette-1-base u-text-2">Activity &amp; Metaverse</h2>
        <div class="u-expanded-width u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-align-center u-border-10 u-border-no-left u-border-no-right u-border-no-top u-border-palette-3-base u-container-style u-custom-border u-list-item u-radius-14 u-repeater-item u-shape-round u-white u-list-item-1" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1">
              <video width="350" height="240" autoplay muted loop class="u-expanded-width u-image u-image-contain u-image-default u-image-6">
              <source src="images/openhouse/AVE.mp4" type="video/mp4"><source src="/movie.ogg" type="video/ogg">                <img src="images/openhouse/ani.jpg" alt="" class="u-expanded-width u-image u-image-contain u-image-default u-image-6" data-image-width="626" data-image-height="626">
              </video>                <h4 class="u-text u-text-default u-text-palette-1-base u-text-3">ANI</h4>
                <p class="u-text u-text-palette-1-dark-2 u-text-4">สนุกกับสาขาแอนนิเมชั่น สอนออกแบบคาแรคเตอร์อย่างง่าย, ถ่ายภาพกับคอสเพลย์เยอร์ และ ร่วมเรียนรู้ colour wheel ผ่านการทำ thaumatrope</p>
                <button type="button" class="u-active-grey-25 u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-white u-btn u-btn-round u-button-style u-hover-grey-25 u-palette-3-base u-radius-50 u-text-active-white u-text-hover-white u-btn-1" data-toggle="modal" data-target="#myPopUpANI">more</button>
              </div>
            </div>
            <div class="u-align-center u-border-10 u-border-no-left u-border-no-right u-border-no-top u-border-palette-3-base u-container-style u-custom-border u-list-item u-radius-14 u-repeater-item u-shape-round u-white u-list-item-2" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-2">
              <video width="350" height="240" autoplay muted loop class="u-expanded-width u-image u-image-contain u-image-default u-image-6">
              <source src="images/openhouse/DG.mp4" type="video/mp4"><source src="/movie.ogg" type="video/ogg">                <img src="images/openhouse/dg.jpg" alt="" class="u-expanded-width u-image u-image-contain u-image-default u-image-6" data-image-width="626" data-image-height="626">
              </video>                <h4 class="u-text u-text-default u-text-palette-1-base u-text-5">DG</h4>
                <p class="u-text u-text-palette-1-dark-2 u-text-6"> Digital Game</p>
                <button type="button" class="u-active-grey-25 u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-white u-btn u-btn-round u-button-style u-hover-grey-25 u-palette-3-base u-radius-50 u-text-active-white u-text-hover-white u-btn-1" data-toggle="modal" data-target="#myPopUpDG">more</button>
              </div>
            </div>
            <div class="u-align-center u-border-10 u-border-no-left u-border-no-right u-border-no-top u-border-palette-3-base u-container-style u-custom-border u-list-item u-radius-14 u-repeater-item u-shape-round u-white u-list-item-3" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-3">
              <video width="350" height="240" autoplay muted loop class="u-expanded-width u-image u-image-contain u-image-default u-image-6">
              <source src="images/openhouse/MMIT.mp4" type="video/mp4"><source src="/movie.ogg" type="video/ogg">                <img src="images/openhouse/mmit.png" alt="" class="u-expanded-width u-image u-image-contain u-image-default u-image-6" data-image-width="626" data-image-height="626">
              </video>                <h4 class="u-text u-text-default u-text-palette-1-base u-text-7">MMIT</h4>
                <p class="u-text u-text-palette-1-dark-2 u-text-8">Modern Management Information Technology</p>
                <button type="button" class="u-active-grey-25 u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-white u-btn u-btn-round u-button-style u-hover-grey-25 u-palette-3-base u-radius-50 u-text-active-white u-text-hover-white u-btn-1" data-toggle="modal" data-target="#myPopUpMMIT">more</button>
              </div>
            </div>
            <div class="u-align-center u-border-10 u-border-no-left u-border-no-right u-border-no-top u-border-palette-3-base u-container-style u-custom-border u-list-item u-radius-14 u-repeater-item u-shape-round u-white u-list-item-4" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-4">
              <video width="350" height="240" autoplay muted loop class="u-expanded-width u-image u-image-contain u-image-default u-image-6">
              <source src="images/openhouse/DII.mp4" type="video/mp4"><source src="/movie.ogg" type="video/ogg">                <img src="images/openhouse/dii.png" alt="" class="u-expanded-width u-image u-image-contain u-image-default u-image-6" data-image-width="626" data-image-height="626">
              </video>                <h4 class="u-text u-text-default u-text-palette-1-base u-text-9">DII</h4>
                <p class="u-text u-text-palette-1-dark-2 u-text-10">Digital Industry Intigration</p>
                <button type="button" class="u-active-grey-25 u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-white u-btn u-btn-round u-button-style u-hover-grey-25 u-palette-3-base u-radius-50 u-text-active-white u-text-hover-white u-btn-1" data-toggle="modal" data-target="#myPopUpDII">more</button>
              </div>
            </div>
            <div class="u-align-center u-border-10 u-border-no-left u-border-no-right u-border-no-top u-border-palette-3-base u-container-style u-custom-border u-list-item u-radius-14 u-repeater-item u-shape-round u-white u-list-item-5" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-5">
              <video width="350" height="240" autoplay muted loop class="u-expanded-width u-image u-image-contain u-image-default u-image-6">
              <source src="images/openhouse/SE.mp4" type="video/mp4"><source src="/movie.ogg" type="video/ogg">                <img src="images/openhouse/se.png" alt="" class="u-expanded-width u-image u-image-contain u-image-default u-image-6" data-image-width="626" data-image-height="626">
              </video>                <h4 class="u-text u-text-default u-text-palette-1-base u-text-11">SE</h4>
                <p class="u-text u-text-palette-1-dark-2 u-text-12">Software Engineer</p>
                <button type="button" class="u-active-grey-25 u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-white u-btn u-btn-round u-button-style u-hover-grey-25 u-palette-3-base u-radius-50 u-text-active-white u-text-hover-white u-btn-1" data-toggle="modal" data-target="#myPopUpSE">more</button>
              </div>
            </div>
            <div class="u-align-center u-border-10 u-border-no-left u-border-no-right u-border-no-top u-border-palette-3-base u-container-style u-custom-border u-list-item u-radius-14 u-repeater-item u-shape-round u-white u-list-item-6" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-6">
              <video width="350" height="240" autoplay muted loop class="u-expanded-width u-image u-image-contain u-image-default u-image-6">
              <source src="images/openhouse/Camt Metaverse 20 Sec.mp4" type="video/mp4"><source src="/movie.ogg" type="video/ogg">                <img src="images/openhouse/roadmap.png" alt="" class="u-expanded-width u-image u-image-contain u-image-default u-image-6" data-image-width="626" data-image-height="626">
              </video>
                <h4 class="u-text u-text-default u-text-palette-1-base u-text-13">CAMT Metaverse</h4>
                <p class="u-text u-text-palette-1-dark-2 u-text-14">CAMT META</p>
                <button type="button" class="u-active-grey-25 u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-white u-btn u-btn-round u-button-style u-hover-grey-25 u-palette-3-base u-radius-50 u-text-active-white u-text-hover-white u-btn-1" data-toggle="modal" data-target="#myPopUpCAMT_META">more</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-palette-1-base u-section-6" id="carousel_894c">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-gutter-40 u-layout-spacing-vertical u-layout-wrap u-layout-wrap-1">
          <div class="u-gutter-0 u-layout">
            <div class="u-layout-row">
              <div class="u-size-29 u-size-60-md">
                <div class="u-layout-col">
                  <div class="u-align-left u-container-style u-image u-image-contain u-layout-cell u-left-cell u-size-40 u-image-8" data-image-width="537" data-image-height="326" data-animation-name="zoomIn" data-animation-duration="2000" data-animation-direction="">
                    <div class="u-container-layout u-container-layout-3" src=""></div>
                  </div>
                  <div class="u-align-center u-container-style u-layout-cell u-left-cell u-size-20 u-layout-cell-4">
                    <div class="u-container-layout u-valign-middle u-container-layout-4">
                      <h2 class="u-text u-text-palette-3-base u-text-3"><br>Walk-in</h2>
                      <p class="u-text u-text-4">
                      <p class="u-text u-text-2">สามารถเข้าร่วมได้ในช่วงเวลา<br>9.00-10.30 น.<br>10.30-12.00 น.<br>13.00-14.30 น.<br>14.30-16.00 น.&nbsp;<br><br> <a href="visit_form.php" class="u-active-grey-25 u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-white u-btn u-btn-round u-button-style u-hover-grey-25 u-palette-3-base u-radius-50 u-text-active-white u-text-hover-white u-btn-6" target="_blank">ลงทะเบียนร่วมงาน</a></p>                      </p>
                      <!-- <p class="u-text u-text-5">Image from <a href="https://freepik.com/photos/man" class="u-active-none u-border-1 u-border-palette-3-base u-btn u-button-link u-button-style u-hover-none u-none u-radius-0 u-text-body-alt-color u-btn-1">Freepik</a> -->
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="u-size-29 u-size-60-md">
                <div class="u-layout-col">
                  <div class="u-align-left u-container-style u-image u-image-contain u-layout-cell u-left-cell u-size-40 u-image-2" data-image-width="537" data-image-height="326" data-animation-name="zoomIn" data-animation-duration="2000" data-animation-direction="">
                    <div class="u-container-layout u-container-layout-3" src=""></div>
                  </div>
                  <div class="u-align-center u-container-style u-layout-cell u-left-cell u-size-20 u-layout-cell-4">
                    <div class="u-container-layout u-valign-middle u-container-layout-4">
                      <h2 class="u-text u-text-palette-3-base u-text-3">Workshop</h2>
                      <p class="u-text u-text-4">
                        <br>workshop ทุกสาขาเริ่มเวลา<br>ช่วงเช้า 9.00-11.00 น.<br>ช่วงบ่าย 13.00-15.00 น.<br>*จำกัดสาขาละ 30 คน<br><br> <a href="open_form.php" class="u-active-grey-25 u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-white u-btn u-btn-round u-button-style u-hover-grey-25 u-palette-3-base u-radius-50 u-text-active-white u-text-hover-white u-btn-6" target="_blank">ลงทะเบียนเข้าร่วม workshop</a>
                      </p>
                      <!-- <p class="u-text u-text-5">Image from <a href="https://freepik.com/photos/man" class="u-active-none u-border-1 u-border-palette-3-base u-btn u-button-link u-button-style u-hover-none u-none u-radius-0 u-text-body-alt-color u-btn-1">Freepik</a> -->
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  <section id="facts" class="facts-area dark-bg">
    <div class="container">
      <div class="facts-wrapper">
          <div class="row">
            <div class="col-md-3 col-sm-6 ts-facts">
                <div class="ts-facts-img">
                  <img loading="lazy" src="images/icon-image/fact1.png" alt="facts-img">
                </div>
                <div class="ts-facts-content">
                  <h2 class="ts-facts-num"><span class="counterUp" data-count="1789">0</span></h2>
                  <h3 class="ts-facts-title">Total Projects</h3>
                </div>
            </div><!-- Col end -->

            <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-sm-0">
                <div class="ts-facts-img">
                  <img loading="lazy" src="images/icon-image/fact2.png" alt="facts-img">
                </div>
                <div class="ts-facts-content">
                  <h2 class="ts-facts-num"><span class="counterUp" data-count="647">0</span></h2>
                  <h3 class="ts-facts-title">Staff Members</h3>
                </div>
            </div><!-- Col end -->

            <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-md-0">
                <div class="ts-facts-img">
                  <img loading="lazy" src="images/icon-image/fact3.png" alt="facts-img">
                </div>
                <div class="ts-facts-content">
                  <h2 class="ts-facts-num"><span class="counterUp" data-count="4000">0</span></h2>
                  <h3 class="ts-facts-title">Hours of Work</h3>
                </div>
            </div><!-- Col end -->

            <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-md-0">
                <div class="ts-facts-img">
                  <img loading="lazy" src="images/icon-image/fact4.png" alt="facts-img">
                </div>
                <div class="ts-facts-content">
                  <h2 class="ts-facts-num"><span class="counterUp" data-count="44">0</span></h2>
                  <h3 class="ts-facts-title">Countries Experience</h3>
                </div>
            </div><!-- Col end -->

          </div> <!-- Facts end -->
      </div>
      <!--/ Content row end -->
    </div>
    <!--/ Container end -->
  </section><!-- Facts end -->
    <section class="u-align-center u-clearfix u-grey-10 u-section-7" id="carousel_ce86">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <h2 class="u-text u-text-default u-text-1">แผนที่<br>
        </h2><span class="u-align-center u-icon u-icon-circle u-text-palette-3-base u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 299.1 146.8" style=""><use xlink:href="#svg-dd6d"></use></svg><svg class="u-svg-content" viewBox="0 0 299.1 146.8" x="0px" y="0px" id="svg-dd6d" style="enable-background:new 0 0 299.1 146.8;"><path d="M5.5,85.4c6.4,5.3,15.9,4.6,21.1-1.8c2.2-2.7,4.9-4,7.6-4c0,0,0,0,0,0c2.7,0,5.4,1.2,7.6,4l0.1,0c7.9,9.6,19.1,15,30.8,15
	c0,0,0,0,0,0c11.7,0,22.9-5.3,30.8-15c2.2-2.7,4.9-4,7.6-4c0,0,0,0,0,0c2.7,0,5.4,1.3,7.6,4l0.1,0c7.9,9.6,19.1,15,30.8,15
	c0,0,0,0,0,0c11.6,0,22.8-5.5,30.7-15.1c0,0,0.1,0.2,0.1,0.1c2.2-2.7,4.9-4,7.6-4c0,0,0,0,0,0c0.3,0,0.5-0.2,0.8-0.2
	c2.3,0.3,4.6,1.6,6.6,4l0.1,0.1c7.9,9.6,19.1,15.1,30.8,15.1c0,0,0,0,0,0c11.6,0,22.8-5.5,30.7-15.1c0,0,0.1,0.2,0.1,0.1
	c2.2-2.7,4.9-4,7.6-4c0,0,0,0,0,0c2.7,0,5.4,1.3,7.6,3.9l0.1,0c5.2,6.4,14.7,7.3,21.1,2.1c6.4-5.2,7.4-14.7,2.2-21.1l-0.1,0.1
	c-7.9-9.6-19.1-14.9-30.8-14.9c0,0,0,0,0,0c-11.6,0-22.8,5.3-30.7,14.9c0,0-0.1,0-0.1,0c-2.2,2.7-4.9,4.1-7.6,4.1c0,0,0,0,0,0
	c-2.2,0-4.4-1-6.4-2.9c-0.3-0.4-0.6-0.8-0.9-1.2l-0.1-0.2c-7.4-9-17.8-14.2-28.6-14.9c-0.8-0.1-1.6,0.2-2.4,0.2c0,0,0,0,0,0
	c-11.7,0-22.9,5.3-30.8,14.9c-0.4,0.4-0.7,0.8-1,1.3c-2,1.9-4.2,2.8-6.4,2.8c0,0,0,0,0,0c-2.7,0-5.4-1.5-7.6-4.2l-0.1,0.1
	c-7.9-9.6-19.1-14.9-30.8-14.9c0,0,0,0,0,0c-11.7,0-22.9,5.3-30.8,15c-2.2,2.7-4.9,4-7.6,4c0,0,0,0,0,0c-2.7,0-5.4-1.5-7.6-4.2
	L65,64.5c-7.9-9.6-19.1-14.9-30.8-14.9c0,0,0,0,0,0c-11.7,0-22.9,5.3-30.8,14.9C-1.9,71-0.9,80.2,5.5,85.4z"></path></svg></span>
        <div class="u-expanded-width u-list u-list-1">
          <div class="u-repeater u-repeater-1">
          <div class="u-align-center u-border-10 u-border-no-left u-border-no-right u-border-no-top u-border-palette-3-base u-container-style u-custom-border u-list-item u-radius-14 u-repeater-item u-shape-round u-white u-list-item-2">
              <div class="u-container-layout u-similar-container u-container-layout-2">
              <video width="300" height="240" controls>
              <source src="images/openhouse/map.mp4" type="video/mp4">
              <source src="/movie.ogg" type="video/ogg" >browser ไม่รองรับ
              </video>
                <p class="u-align-left u-custom-font u-font-montserrat u-text u-text-1">
                อาคารวิทยาลัยศิลปะ สื่อ และเทคโนโลยี College of Arts, Media and Technology ที่อยู่ /Address : 239 ถ.ห้วยแก้ว ต.สุเทพ อ.เมือง จ.เชียงใหม่ 50200 239 Huaykaew Rd., Suthep, Muang, Chiang Mai 50200
                </p>
              </div>
            </div>
            <div class="u-align-center u-border-10 u-border-no-left u-border-no-right u-border-no-top u-border-palette-3-base u-container-style u-custom-border u-list-item u-radius-14 u-repeater-item u-shape-round u-white u-list-item-1">
              <div class="u-container-layout u-similar-container u-container-layout-1">
                <p class="u-align-left u-custom-font u-font-montserrat u-text u-text-2">
                  <span style="font-weight: 700;" class="u-text-palette-2-base">
                  <img src="images/openhouse/map.png" alt="" class="u-expanded-width u-image u-image-contain u-image-default u-image-4" data-image-width="626" data-image-height="626">
                </p>
              </div>
            </div>
            <div class="u-align-center u-border-10 u-border-no-left u-border-no-right u-border-no-top u-border-palette-3-base u-container-style u-custom-border u-list-item u-radius-14 u-repeater-item u-shape-round u-white u-list-item-3">
              <div class="u-container-layout u-similar-container u-container-layout-3">
                <p class="u-align-left u-custom-font u-font-montserrat u-text u-text-4">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15107.793517173812!2d98.9504032!3d18.8004537!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x85fbac3033920444!2z4Lin4Li04LiX4Lii4Liy4Lil4Lix4Lii4Lio4Li04Lil4Lib4LiwIOC4quC4t-C5iOC4rSDguYHguKXguLDguYDguJfguITguYLguJnguYLguKXguKLguLU!5e0!3m2!1sth!2sth!4v1595144146793!5m2!1sth!2sth" width="100%" height="430" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

                </p>
              </div>
            </div>
          </div>
        </div>
        <a href="https://www.google.com/maps?ll=18.800454,98.950403&z=14&t=m&hl=th&gl=TH&mapclient=embed&cid=9654499549222405188" class="u-border-2 u-border-palette-3-base u-btn u-btn-round u-button-style u-hover-palette-3-base u-none u-radius-7 u-text-active-black u-text-body-color u-text-hover-black u-btn-1">Google Map</a>
      </div>
    </section>
    
<footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-18cf"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">อาคารวิทยาลัยศิลปะ สื่อ และเทคโนโลยี
              College of Arts, Media and Technology
              ที่อยู่ /Address :
              239 ถ.ห้วยแก้ว ต.สุเทพ อ.เมือง จ.เชียงใหม่ 50200
              239 Huaykaew Rd., Suthep, Muang, Chiang Mai 50200 </p>
              <p>
              โทร/Tel. : 053-920299
              โทรสาร/Fax. : 053-941803
              Website : <a href = "http://www.camt.cmu.ac.th">www.camt.cmu.ac.th</a>
            </p>
      </div></footer>
    <section class="u-backlink u-clearfix u-grey-80">
      <!-- <a class="u-link" href="https://nicepage.com/website-templates" target="_blank"> -->
        <span>Website </span>
      </a>
      <p class="u-text">
        <span>created by</span>
      </p>
      <a class="u-link" href="https://www.facebook.com/chen.ponlawat" target="_blank">
        <span>chain ponlawat</span>
      </a> 
    </section>
  </body>
</html>