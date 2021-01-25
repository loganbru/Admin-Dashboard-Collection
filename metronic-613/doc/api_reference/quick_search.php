<?php header('Access-Control-Allow-Origin: *');
$dir = str_replace('/tools', '', dirname($_SERVER['PHP_SELF'])); ?>
<div class="kt-quick-search__result">
	<div class="kt-quick-search__message kt-hidden">
		No record found
	</div>

    <div class="kt-quick-search__category">
        Documents
    </div>
    <div class="kt-quick-search__section">
        <div class="kt-quick-search__item">
            <div class="kt-quick-search__item-img kt-quick-search__item-img--file">
                <img src="https://<?php echo $_SERVER['SERVER_NAME'] . $dir ?>/assets/media/files/doc.svg" alt="" />
            </div>
            <div class="kt-quick-search__item-wrapper">
                <a href="#" class="kt-quick-search__item-title">
					AirPlus Requirements
				</a>
                <div class="kt-quick-search__item-desc">
                    by Grog John
                </div>
            </div>
        </div>

        <div class="kt-quick-search__item">
            <div class="kt-quick-search__item-img kt-quick-search__item-img--file">
                <img src="https://<?php echo $_SERVER['SERVER_NAME'] . $dir ?>/assets/media/files/pdf.svg" alt="" />
            </div>
            <div class="kt-quick-search__item-wrapper">
                <a href="#" class="kt-quick-search__item-title">
				    TechNav Documentation
				</a>
                <div class="kt-quick-search__item-desc">
                    by Mary Broun
                </div>
            </div>
        </div>

        <div class="kt-quick-search__item">
            <div class="kt-quick-search__item-img kt-quick-search__item-img--file">
                <img src="https://<?php echo $_SERVER['SERVER_NAME'] . $dir ?>/assets/media/files/zip.svg" alt="" />
            </div>
            <div class="kt-quick-search__item-wrapper">
                <a href="#" class="kt-quick-search__item-title">
					All Framework Docs
				</a>
                <div class="kt-quick-search__item-desc">
                    by Nick Stone
                </div>
            </div>
        </div>

        <div class="kt-quick-search__item">
            <div class="kt-quick-search__item-img kt-quick-search__item-img--file">
                <img src="https://<?php echo $_SERVER['SERVER_NAME'] . $dir ?>/assets/media/files/xml.svg" alt="" />
            </div>
            <div class="kt-quick-search__item-wrapper">
                <a href="#" class="kt-quick-search__item-title">
					AirPlus Requirements
				</a>
                <div class="kt-quick-search__item-desc">
                    by Tim Hardy
                </div>
            </div>
        </div>
    </div>

    <div class="kt-quick-search__category">
        Members
    </div>
    <div class="kt-quick-search__section">
        <div class="kt-quick-search__item">
            <div class="kt-quick-search__item-img">
                <img src="https://<?php echo $_SERVER['SERVER_NAME'] . $dir ?>/assets/media/users/300_14.jpg" alt="" />
            </div>
            <div class="kt-quick-search__item-wrapper">
                <a href="#" class="kt-quick-search__item-title">
									Jimmy Curry
								</a>
                <div class="kt-quick-search__item-desc">
                    Software Developer
                </div>
            </div>
        </div>

        <div class="kt-quick-search__item">
            <div class="kt-quick-search__item-img">
                <img src="https://<?php echo $_SERVER['SERVER_NAME'] . $dir ?>/assets/media/users/300_20.jpg" alt="" />
            </div>
            <div class="kt-quick-search__item-wrapper">
                <a href="#" class="kt-quick-search__item-title">
									Milena Gibson
								</a>
                <div class="kt-quick-search__item-desc">
                    UI Designer
                </div>
            </div>
        </div>

        <div class="kt-quick-search__item">
            <div class="kt-quick-search__item-img">
                <img src="https://<?php echo $_SERVER['SERVER_NAME'] . $dir ?>/assets/media/users/300_21.jpg" alt="" />
            </div>
            <div class="kt-quick-search__item-wrapper">
                <a href="#" class="kt-quick-search__item-title">
									Stefan JohnStefan
								</a>
                <div class="kt-quick-search__item-desc">
                    Marketing Manager
                </div>
            </div>
        </div>

        <div class="kt-quick-search__item">
            <div class="kt-quick-search__item-img">
                <img src="https://<?php echo $_SERVER['SERVER_NAME'] . $dir ?>/assets/media/users/300_2.jpg" alt="" />
            </div>
            <div class="kt-quick-search__item-wrapper">
                <a href="#" class="kt-quick-search__item-title">
									Anna Strong
								</a>
                <div class="kt-quick-search__item-desc">
                    Software Developer
                </div>
            </div>
        </div>
    </div>

    <div class="kt-quick-search__category">
        Files
    </div>
    <div class="kt-quick-search__section">
        <div class="kt-quick-search__item">
            <div class="kt-quick-search__item-icon">
                <i class="flaticon2-box kt-font-danger"></i>
            </div>
            <div class="kt-quick-search__item-wrapper">
                <a href="#" class="kt-quick-search__item-title">
									2 New items submitted
								</a>
                <div class="kt-quick-search__item-desc">
                    Marketing Manager
                </div>
            </div>
        </div>

        <div class="kt-quick-search__item">
            <div class="kt-quick-search__item-icon">
                <i class="flaticon-psd kt-font-brand"></i>
            </div>
            <div class="kt-quick-search__item-wrapper">
                <a href="#" class="kt-quick-search__item-title">
									79 PSD files generated
								</a>
                <div class="kt-quick-search__item-desc">
                    by Grog John
                </div>
            </div>
        </div>

        <div class="kt-quick-search__item">
            <div class="kt-quick-search__item-icon">
                <i class="flaticon2-supermarket kt-font-warning"></i>
            </div>
            <div class="kt-quick-search__item-wrapper">
                <a href="#" class="kt-quick-search__item-title">
									$2900 worth products sold
								</a>
                <div class="kt-quick-search__item-desc">
                    Total 234 items
                </div>
            </div>
        </div>

        <div class="kt-quick-search__item">
            <div class="kt-quick-search__item-icon">
                <i class="flaticon-safe-shield-protection kt-font-info"></i>
            </div>
            <div class="kt-quick-search__item-wrapper">
                <a href="#" class="kt-quick-search__item-title">
									4 New items submitted
								</a>
                <div class="kt-quick-search__item-desc">
                    Marketing Manager
                </div>
            </div>
        </div>
    </div>
</div>
