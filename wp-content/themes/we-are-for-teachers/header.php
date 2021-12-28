<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="Учитель, ученик, поздравление, открытка, подарок, день знаний, 1 сентября">
  <meta name="description" content="С нашей помощью вы сможете сделать поздравительную открытку для своего учителя">
	<?php wp_head(); ?>
  <link rel="icon" href="<?php bloginfo( 'template_directory' ) ?>/img/favicon.ico"/>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
  <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ) ?>/styles/slick.css">
  <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ) ?>/styles/main.css">
  <title><?php bloginfo( 'name' ); ?> | <?php bloginfo( 'description' ); ?></title>
</head>

<body>
<svg xmlns="http://www.w3.org/2000/svg" style="display: none">
  <symbol viewBox="0 0 240 240" id="telegram-icon">
    <path d="M98 175c-3.888 0-3.227-1.468-4.568-5.17L82 132.207 170 80"/>
    <path d="M98 175c3 0 4.325-1.372 6-3l16-15.558-19.958-12.035"/>
    <path
        d="M100.04 144.41l48.36 35.729c5.519 3.045 9.501 1.468 10.876-5.123l19.685-92.763c2.015-8.08-3.08-11.746-8.36-9.349l-115.59 44.571c-7.89 3.165-7.843 7.567-1.438 9.528l29.663 9.259 68.673-43.325c3.242-1.966 6.218-.91 3.776 1.258"/>
  </symbol>
  <symbol viewBox="0 0 27 26" id="tiktok-icon">
    <path
        d="M15.7441 9.60896C16.6926 10.2864 17.8541 10.685 19.1086 10.685V8.78561C18.4084 8.63658 17.7884 8.27078 17.3223 7.76203C16.5245 7.26444 15.9497 6.44352 15.7811 5.48267H14.0224V15.1206C14.0184 16.2441 13.1061 17.1539 11.981 17.1539C11.3181 17.1539 10.7291 16.838 10.3561 16.3488C9.68999 16.0128 9.23321 15.323 9.23321 14.5263C9.23321 13.3995 10.147 12.4861 11.2745 12.4861C11.4905 12.4861 11.6987 12.5197 11.894 12.5816V10.6615C9.47278 10.7115 7.52551 12.6888 7.52551 15.1206C7.52551 16.3346 8.01044 17.4351 8.79741 18.2391C9.50743 18.7157 10.3622 18.9935 11.2817 18.9935C13.7462 18.9935 15.7441 16.9966 15.7441 14.5333V9.60896Z"/>
  </symbol>
  <symbol viewBox="0 0 28 28" id="zen-icon">
    <path
        d="M16.7 16.7c-2.2 2.27-2.36 5.1-2.55 11.3 5.78 0 9.77-.02 11.83-2.02 2-2.06 2.02-6.24 2.02-11.83-6.2.2-9.03.35-11.3 2.55M0 14.15c0 5.59.02 9.77 2.02 11.83 2.06 2 6.05 2.02 11.83 2.02-.2-6.2-.35-9.03-2.55-11.3-2.27-2.2-5.1-2.36-11.3-2.55M13.85 0C8.08 0 4.08.02 2.02 2.02.02 4.08 0 8.26 0 13.85c6.2-.2 9.03-.35 11.3-2.55 2.2-2.27 2.36-5.1 2.55-11.3m2.85 11.3C14.5 9.03 14.34 6.2 14.15 0c5.78 0 9.77.02 11.83 2.02 2 2.06 2.02 6.24 2.02 11.83-6.2-.2-9.03-.35-11.3-2.55"/>
    <path fill="none"
          d="M28 14.15v-.3c-6.2-.2-9.03-.35-11.3-2.55-2.2-2.27-2.36-5.1-2.55-11.3h-.3c-.2 6.2-.35 9.03-2.55 11.3-2.27 2.2-5.1 2.36-11.3 2.55v.3c6.2.2 9.03.35 11.3 2.55 2.2 2.27 2.36 5.1 2.55 11.3h.3c.2-6.2.35-9.03 2.55-11.3 2.27-2.2 5.1-2.36 11.3-2.55"/>
  </symbol>
  <symbol viewBox="0 0 41 28" id="youtube-icon">
    <path
        d="M40.144 4.32351C39.9064 3.49148 39.4531 2.73342 38.828 2.12261C38.203 1.51179 37.4272 1.06887 36.5757 0.836667C33.3799 2.39883e-05 20.5182 2.36891e-05 20.5182 2.36891e-05C20.5182 2.36891e-05 7.68902 -0.0166755 4.46078 0.836667C3.6093 1.06887 2.83353 1.51179 2.20844 2.12261C1.58335 2.73342 1.13008 3.49148 0.892451 4.32351C0.286657 7.52064 -0.0120029 10.7661 0.000369124 14.0175C-0.009664 17.2567 0.288986 20.4898 0.892451 23.6748C1.13008 24.5069 1.58335 25.2649 2.20844 25.8757C2.83353 26.4866 3.6093 26.9295 4.46078 27.1617C7.65313 28 20.5182 28 20.5182 28C20.5182 28 33.3458 28 36.5757 27.1617C37.4272 26.9295 38.203 26.4866 38.828 25.8757C39.4531 25.2649 39.9064 24.5069 40.144 23.6748C40.7349 20.4886 41.021 17.2556 40.9985 14.0175C41.0233 10.7673 40.7372 7.5218 40.144 4.32351ZM16.4133 20.0143V8.0024L27.1183 14.0175L16.4133 20.0143Z"/>
  </symbol>
  <symbol viewBox="0 0 9 18" id="facebook-icon">
    <path
        d="M8.49723 3.30619H6.99856C5.81539 3.30619 5.60505 3.88633 5.60505 4.74748V6.58763H8.39206L8.02397 9.57899H5.60505V17.1934H2.62523V9.57899H0.171265V6.58763H2.62523V4.44835C2.62523 1.91928 4.11514 0.541443 6.29742 0.541443C7.34036 0.541443 8.23431 0.623025 8.49723 0.659284V3.30619Z"/>
  </symbol>
  <symbol viewBox="0 0 17 10" id="vk-icon">
    <path
        d="M8.28767 9.95233H9.30555C9.30555 9.95233 9.61226 9.91795 9.7688 9.74459C9.91755 9.58294 9.91755 9.28377 9.91755 9.28377C9.91755 9.28377 9.89559 7.87423 10.5331 7.66723C11.1614 7.46169 11.9583 9.02775 12.8076 9.62975C13.4564 10.0898 13.9444 9.99109 13.9444 9.99109L16.2189 9.95891C16.2189 9.95891 17.4103 9.8821 16.8472 8.91584C16.804 8.83904 16.5278 8.20266 15.1677 6.89699C13.7426 5.53574 13.9338 5.75518 15.6466 3.39547C16.6871 1.95814 17.1128 1.07965 16.9747 0.706602C16.8571 0.355498 16.0822 0.442543 16.0822 0.442543L13.5308 0.465218C13.5308 0.465218 13.3395 0.442542 13.2014 0.53105C13.0633 0.618094 12.979 0.817053 12.979 0.817053C12.979 0.817053 12.5738 1.93546 12.0326 2.87979C10.883 4.87596 10.4261 4.98567 10.2455 4.85401C9.81767 4.56801 9.92747 3.6983 9.92747 3.07509C9.92747 1.14329 10.2136 0.332091 9.37425 0.123624C9.098 0.0570604 8.89188 0.013904 8.18071 0.00220054C7.26695 -0.00803998 6.49628 0.00951511 6.05924 0.229686C5.77236 0.378174 5.54923 0.706601 5.67744 0.723425C5.84744 0.745369 6.22924 0.830219 6.43111 1.11622C6.69674 1.48634 6.68541 2.3129 6.68541 2.3129C6.68541 2.3129 6.83487 4.59215 6.33549 4.87522C5.98486 5.06687 5.51736 4.67041 4.49735 2.8593C3.97672 1.93766 3.58289 0.906292 3.58289 0.906292C3.58289 0.906292 3.50851 0.719037 3.3711 0.609317C3.2103 0.488625 2.97655 0.444737 2.97655 0.444737L0.543413 0.466681C0.543413 0.466681 0.182161 0.478385 0.0553688 0.642233C-0.0622152 0.784869 0.0440354 1.09208 0.0440354 1.09208C0.0440354 1.09208 1.94663 5.69081 4.10423 8.00663C6.08049 10.1293 8.32308 9.99256 8.32308 9.99256L8.28767 9.95233Z"/>
  </symbol>
  <symbol viewBox="0 0 14 14" id="instagram-icon">
    <path fill-rule="evenodd" clip-rule="evenodd"
          d="M0.320435 4.35767C0.320435 1.98151 2.24669 0.0552521 4.62285 0.0552521H9.64233C12.0185 0.0552521 13.9447 1.98151 13.9447 4.35767V9.37714C13.9447 11.7533 12.0185 13.6796 9.64233 13.6796H4.62285C2.24669 13.6796 0.320435 11.7533 0.320435 9.37715V4.35767ZM12.2417 2.60978C12.2417 3.08006 11.8605 3.4613 11.3902 3.4613C10.9199 3.4613 10.5387 3.08006 10.5387 2.60978C10.5387 2.13949 10.9199 1.75826 11.3902 1.75826C11.8605 1.75826 12.2417 2.13949 12.2417 2.60978ZM9.40332 6.86742C9.40332 8.1215 8.38668 9.13814 7.1326 9.13814C5.87851 9.13814 4.86188 8.1215 4.86188 6.86742C4.86188 5.61334 5.87851 4.5967 7.1326 4.5967C8.38668 4.5967 9.40332 5.61334 9.40332 6.86742ZM10.5387 6.86742C10.5387 8.74854 9.01372 10.2735 7.1326 10.2735C5.25147 10.2735 3.72652 8.74854 3.72652 6.86742C3.72652 4.98629 5.25147 3.46134 7.1326 3.46134C9.01372 3.46134 10.5387 4.98629 10.5387 6.86742Z"/>
  </symbol>
</svg>
<?php wp_body_open(); ?>

<header class="header">
  <div class="inner">

	  <?php the_custom_logo(); ?>
	  <?php /* <a href="javascript:void(0);" class="header__logo logo">
        <img src="<?php bloginfo('template_directory') ?>/img/footer-logo.svg" alt="Мы - учителям!" width="316" height="40">
        </a> */ ?>

    <!--<label for="theme"></label>
    <select id="theme">
      <option value="auto">Auto</option>
      <option value="light">Light</option>
      <option value="dark">Dark</option>
      <option value="snow">Snow</option>
    </select>-->

    <div class="theme" data-state="" data-theme="">
      <p class="theme__title"></p>
      <div class="theme__list">
        <input id="theme-1" class="theme__input" type="radio" name="singleSelect" value="auto">
        <label for="theme-1" class="theme__label" data-value="auto"></label>
        <input id="theme-2" class="theme__input" type="radio" name="singleSelect" value="light">
        <label for="theme-2" class="theme__label" data-value="light"></label>
        <input id="theme-3" class="theme__input" type="radio" name="singleSelect" value="dark">
        <label for="theme-3" class="theme__label" data-value="dark"></label>
        <input id="theme-4" class="theme__input" type="radio" name="singleSelect" value="snow">
        <label for="theme-4" class="theme__label" data-value="snow"></label>
      </div>
    </div>

    <ul class="header__social-list social">
      <li class="social__item">
        <a href="<?php the_field( 'telegram', 42 ) ?>" class="social__link" target="_blank">
          <svg class="social__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 240 240" width="28"
               height="24">
            <use xlink:href="#telegram-icon"/>
          </svg>
        </a>
      </li>
      <li class="social__item">
        <a href="<?php the_field( 'tiktok', 42 ) ?>" class="social__link" target="_blank">
          <svg class="social__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 27 26" width="27"
               height="26">
            <use xlink:href="#tiktok-icon"/>
          </svg>
        </a>
      </li>
      <li class="social__item">
        <a href="<?php the_field( 'zen-yandex', 42 ) ?>" class="social__link" target="_blank">
          <svg class="social__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 28" width="17"
               height="17">
            <use xlink:href="#zen-icon"/>
          </svg>
        </a>
      </li>
      <li class="social__item">
        <a href="<?php the_field( 'youtube', 42 ) ?>" class="social__link" target="_blank">
          <svg class="social__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 41 28" width="18"
               height="12">
            <use xlink:href="#youtube-icon"/>
          </svg>
        </a>
      </li>
      <li class="social__item">
        <a href="<?php the_field( 'facebook', 42 ) ?>" class="social__link" target="_blank">
          <svg class="social__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 9 18" width="9"
               height="18">
            <use xlink:href="#facebook-icon"/>
          </svg>
        </a>
      </li>
      <li class="social__item">
        <a href="<?php the_field( 'vk', 42 ) ?>" class="social__link" target="_blank">
          <svg class="social__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17 10" width="17"
               height="10">
            <use xlink:href="#vk-icon"/>
          </svg>
        </a>
      </li>
      <li class="social__item">
        <a href="<?php the_field( 'instagram', 42 ) ?>" class="social__link" target="_blank">
          <svg class="social__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="14"
               height="14">
            <use xlink:href="#instagram-icon"/>
          </svg>
        </a>
      </li>
    </ul>
    <div class="nav__menu-field">
      <span class="nav__menu-btn"></span>
    </div>
  </div>
</header>