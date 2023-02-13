
<?php 
// initial selected products and shipping prices provided
error_reporting(0);
  $products = [
    [
      'pid' => '01234',
      'title' => '5G Male Enhancement',
      'description' => 'Organic supplament for addressing declining health issue',
      'imgURL' => './assets/images/5g.png',
      'imgDescription' => 'single bottle of product',
      'size' => '1 month',
      'sub' => false,
      'price' => 49.99
    ],
    [
      'pid' => '01235',
      'title' => '5G Male Enhancement',
      'description' => 'Organic supplament for addressing declining health issue',
      'imgURL' => './assets/images/5g.png',
      'imgDescription' => 'three bottles of product',
      'size' => '3 month',
      'sub' => false,
      'price' => 59.99
    ]
  ];
  // $ship_standard = 9.95;
  // $ship_express = 16.95;
  $ship_cost = 0.00;
?>

<html lang="en">

<head>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,500,600,700,800" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="./shared/css/base.css"></link>
  <script src="./shared/js/pristine.min.js"></script>

  <style>

    .hover\:bg-green-600 {
      cursor: pointer;
    }

    .input-error input, .input-error select {
      border: 1px solid red;
    }

    @keyframes append-animate {
      from {
        transform: scaleY(0);
        opacity: 0;
      }
      to {
        transform: scaleY(1);
        opacity: 1;
      }
    }

    .pristine-error {
      transform-origin: 50% 0;
      animation: append-animate 250ms ease-in-out;
    }

    .credit-card {
      background-position: center center;
      background-size: contain;
      background-repeat: no-repeat;
      width: 55px;
      height: 35px;
    }

    .amex {
      background-image: url("data:image/svg+xml,%0A%3Csvg enable-background='new 0 0 780 500' height='50' viewBox='0 0 780 500' width='78' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='%23393939'%3E%3Cpath d='m199.87 124.06-26.311 63.322-28.644-63.323h-35.722v88.379l-37.224-88.378h-32.517l-39.193 93.344h23.77l8.496-20.82h45.57l8.41 20.82h44.515v-73.171l31.819 73.171h19.218l31.735-73.106.083 73.106h22.435v-93.344zm-129.68 53.068h-29.875l14.896-37.213 14.979 37.211z'/%3E%3Cpath d='m325.74 217.41h-73.12v-93.35h73.12v19.44h-51.23v16.83h50v19.13h-50v18.64h51.23z'/%3E%3Cpath d='m428.82 149.2c0-10.412-4.152-16.5-11.076-20.669-7.076-4.17-15.316-4.471-26.502-4.471h-50.34v93.344h21.884v-33.952h23.495c7.88 0 12.755.713 15.952 3.996 3.982 4.491 3.455 12.569 3.455 18.186l.084 11.771h22.075v-18.338c0-8.336-.534-12.484-3.624-17.126-1.947-2.72-6.037-6.002-10.827-7.861 5.679-2.31 15.424-9.998 15.424-24.88zm-28.622 13.109c-3.007 1.861-6.564 1.923-10.826 1.923h-26.588v-20.734h26.95c3.813 0 7.795.176 10.378 1.685 2.84 1.36 4.597 4.253 4.597 8.251 0 4.08-1.672 7.363-4.511 8.875z'/%3E%3Cpath d='m441.52 124.06h22.334v93.344h-22.334z'/%3E%3Cpath d='m700.52 124.07v65.009l-38.474-65.009h-33.323v88.29l-37.056-88.29h-32.794l-30.847 73.407h-9.83c-5.761 0-11.884-1.121-15.253-4.813-4.068-4.711-6.02-11.922-6.02-21.922 0-9.785 2.562-17.213 6.293-21.144 4.344-4.318 8.854-5.53 16.842-5.53h20.743v-20h-21.189c-15.083 0-26.163 3.436-33.238 10.885-9.407 10-11.798 22.656-11.798 36.499 0 16.975 4 27.71 11.692 35.637 7.629 7.925 21.098 10.323 31.737 10.323h25.61l8.263-20.82h45.465l8.518 20.82h44.573v-70.059l41.485 70.059h31.016l.001.001v-93.342h-22.416zm-110.64 53.064h-30.209l15.062-37.213z'/%3E%3Cpath d='m387.16 284.61h-69.936l-27.839 30.603-26.928-30.603h-88.027v93.366h86.693l28.007-30.909 26.951 30.908h42.54v-31.315h27.31c19.132 0 38.113-5.355 38.113-31.292-.001-25.857-19.516-30.758-36.884-30.758zm-137.12 73.909h-53.811v-18.577h48.049v-19.05h-48.049v-16.974h54.872l23.939 27.208zm86.78 10.966-33.603-38.032 33.603-36.823zm50.082-41.789h-28.285v-23.776h28.539c7.902 0 13.386 3.284 13.386 11.448.001 8.075-5.23 12.328-13.64 12.328z'/%3E%3Cpath d='m534.57 284.61h73.05v19.31h-51.25v16.97h50v19.05h-50v18.58l51.25.08v19.38h-73.05z'/%3E%3Cpath d='m506.92 334.59c5.761-2.331 15.511-9.936 15.513-24.838 0-10.652-4.344-16.479-11.252-20.734-7.183-3.906-15.253-4.404-26.334-4.404h-50.53v93.365h21.993v-34.1h23.389c7.985 0 12.861.799 16.059 4.144 4.067 4.342 3.537 12.658 3.537 18.276v11.681h21.973v-18.509c-.088-8.229-.535-12.484-3.625-17.043-1.87-2.719-5.852-6.006-10.723-7.838zm-13.218-11.619c-2.928 1.771-6.549 1.923-10.809 1.923h-26.588v-20.971h26.951c3.896 0 7.796.085 10.445 1.688 2.836 1.512 4.532 4.403 4.532 8.399.001 3.995-1.695 7.212-4.531 8.961z'/%3E%3Cpath d='m691.2 328.73c4.262 4.496 6.547 10.173 6.547 19.782 0 20.086-12.312 29.461-34.383 29.461h-42.629v-20.021h42.457c4.152 0 7.096-.559 8.939-2.311 1.506-1.445 2.585-3.543 2.585-6.09 0-2.721-1.167-4.88-2.67-6.174-1.674-1.426-3.982-2.072-7.794-2.072-20.468-.713-46.101.646-46.101-28.9 0-13.542 8.347-27.796 31.292-27.796h43.877v19.872h-40.148c-3.98 0-6.568.151-8.77 1.686-2.396 1.513-3.286 3.757-3.286 6.718 0 3.522 2.035 5.92 4.789 6.954 2.309.818 4.79 1.059 8.519 1.059l11.78.324c11.884.295 20.039 2.391 24.996 7.508z'/%3E%3Cpath d='m729.75 307.08c2.228-1.54 4.874-1.692 8.857-1.692h39.889v-261.75c0-23.553-18.586-42.638-41.512-42.638h-695.48c-22.917 0-41.512 19.089-41.512 42.638v124.31l26.505-62.085h57.077l7.351 15.422v-15.421h66.925l14.641 33.726 14.256-33.726h212.48c9.657 0 18.345 1.84 24.718 7.624v-7.624h58.159v7.624c10.018-5.611 22.417-7.625 36.524-7.625h84.278l7.819 15.422v-15.422h62.392l8.515 15.422v-15.421h60.804v130.58h-61.438l-11.611-19.753v19.753h-76.672l-8.327-20.795h-18.877l-8.515 20.795h-39.787c-15.612 0-27.478-3.767-35.106-7.947v7.947h-94.573v-29.631c0-4.182-.723-4.417-3.201-4.504h-3.537l.084 34.136h-182.86v-16.137l-6.568 16.202h-38.196l-6.568-15.965v15.898h-73.577l-8.41-20.795h-18.877l-8.432 20.795h-37.395v.001h-.003v223.92c0 23.553 18.585 42.637 41.512 42.637h695.48c22.917 0 41.512-19.089 41.512-42.638v-93.235l-.001.001v24.343c-8.77 4.331-20.294 6.022-32.095 6.022h-56.712v-8.361c-6.569 5.39-18.436 8.361-29.787 8.361h-178.79v-30.198c0-3.703-.357-3.854-3.979-3.854h-2.84v34.055h-58.854v-35.264c-9.852 4.354-21.019 4.744-30.486 4.594h-7.016v30.738l-71.355-.065-17.542-20.313-18.624 20.313h-115.76v-130.67h117.98l16.928 20 18.071-20h78.981c9.13 0 24.11.978 30.846 7.648v-7.648h70.57c6.632 0 21 1.368 29.515 7.648v-7.648h106.99v7.648c5.319-5.219 16.564-7.648 26.146-7.648h59.913v7.648c6.288-4.652 15.168-7.648 27.391-7.648h40.507v18.633h-43.596c-22.968 0-31.403 14.297-31.403 27.88 0 29.635 25.64 28.271 46.189 28.986 3.812 0 6.122.648 7.711 2.079 1.609 1.298 2.674 3.463 2.674 6.192.017 2.319-.924 4.538-2.588 6.107-1.76 1.758-4.681 2.317-8.857 2.317h-42.096v20.082h42.269c14.023 0 24.383-4.03 29.699-11.979v-.001h.001v-35.092c-.61-.803-1.145-1.604-2.03-2.318-4.872-5.131-12.861-7.235-24.831-7.537l-11.862-.324c-3.646 0-6.126-.242-8.435-1.062-2.836-1.039-4.785-3.443-4.785-6.975 0-2.971.888-5.221 3.197-6.737z'/%3E%3C/g%3E%3C/svg%3E");
    }
    .disc {
      background-image: url("data:image/svg+xml,%0A%3Csvg height='50' viewBox='0 0 780 500' width='78' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill-rule='evenodd'%3E%3Cpath d='m54.992 0c-30.365 0-54.992 24.63-54.992 55.004v390.992c0 30.38 24.619 55.004 54.992 55.004h670.016c30.365 0 54.992-24.63 54.992-55.004v-390.992c0-30.38-24.619-55.004-54.992-55.004z' fill='%23333'/%3E%3Cpath d='m327.152 161.893c8.837 0 16.248 1.784 25.268 6.09v22.751c-8.544-7.863-15.955-11.154-25.756-11.154-19.264 0-34.414 15.015-34.414 34.05 0 20.075 14.681 34.196 35.37 34.196 9.312 0 16.586-3.12 24.8-10.857v22.763c-9.341 4.14-16.911 5.776-25.756 5.776-31.278 0-55.582-22.596-55.582-51.737 0-28.826 24.951-51.878 56.07-51.878zm-97.113.627c11.546 0 22.11 3.72 30.943 10.994l-10.748 13.248c-5.35-5.646-10.41-8.028-16.564-8.028-8.853 0-15.3 4.745-15.3 10.989 0 5.354 3.619 8.188 15.944 12.482 23.365 8.044 30.29 15.176 30.29 30.926 0 19.193-14.976 32.553-36.32 32.553-15.63 0-26.994-5.795-36.458-18.872l13.268-12.03c4.73 8.61 12.622 13.222 22.42 13.222 9.163 0 15.947-5.952 15.947-13.984 0-4.164-2.055-7.734-6.158-10.258-2.066-1.195-6.158-2.977-14.2-5.647-19.291-6.538-25.91-13.527-25.91-27.185 0-16.225 14.214-28.41 32.846-28.41zm234.723 1.728h22.437l28.084 66.592 28.446-66.592h22.267l-45.494 101.686h-11.053zm-397.348.152h30.15c33.312 0 56.534 20.382 56.534 49.641 0 14.59-7.104 28.696-19.118 38.057-10.108 7.901-21.626 11.445-37.574 11.445h-29.992zm96.135 0h20.54v99.143h-20.54zm411.734 0h58.252v16.8h-37.725v22.005h36.336v16.791h-36.336v26.762h37.726v16.785h-58.252v-99.143zm71.858 0h30.455c23.69 0 37.265 10.71 37.265 29.272 0 15.18-8.514 25.14-23.986 28.105l33.148 41.766h-25.26l-28.429-39.828h-2.678v39.828h-20.515zm20.515 15.616v30.025h6.002c13.117 0 20.069-5.362 20.069-15.328 0-9.648-6.954-14.697-19.745-14.697zm-579.716 1.183v65.559h5.512c13.273 0 21.656-2.394 28.11-7.88 7.103-5.955 11.376-15.465 11.376-24.98 0-9.499-4.273-18.725-11.376-24.681-6.785-5.78-14.837-8.018-28.11-8.018z' fill='%23fff'/%3E%3Cpath d='m415.13 161.21c30.941 0 56.022 23.58 56.022 52.709v.033c0 29.13-25.081 52.742-56.021 52.742s-56.022-23.613-56.022-52.742v-.033c0-29.13 25.082-52.71 56.022-52.71zm364.85 127.15c-26.05 18.33-221.08 149.34-558.75 212.62h503.76c30.365 0 54.992-24.63 54.992-55.004v-157.62z' fill='%23e3e3e3'/%3E%3C/g%3E%3C/svg%3E");
    }
    .mc {
      background-image: url("data:image/svg+xml,%0A%3Csvg enable-background='new 0 0 780 500' height='50' viewBox='0 0 780 500' width='78' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='m40 0h700c22.092 0 40 17.909 40 40v420c0 22.092-17.908 40-40 40h-700c-22.091 0-40-17.908-40-40v-420c0-22.091 17.909-40 40-40z' fill='%233c3c3c'/%3E%3Cpath d='m449.01 250c0 99.143-80.37 179.5-179.51 179.5s-179.5-80.361-179.5-179.5c0-99.133 80.362-179.5 179.5-179.5 99.137 0 179.51 80.37 179.51 179.5' fill='%23494949'/%3E%3Cpath d='m510.49 70.496c-46.38 0-88.643 17.596-120.5 46.466-6.49 5.889-12.548 12.237-18.125 18.996h36.266c4.966 6.037 9.536 12.388 13.685 19.013h-63.635c-3.827 6.121-7.28 12.469-10.341 19.008h84.312c2.893 6.185 5.431 12.53 7.6 19.004h-99.512c-2.091 6.235-3.832 12.581-5.217 19.009h109.94c2.689 12.49 4.044 25.231 4.041 38.008 0 19.934-3.254 39.113-9.254 57.02h-99.512c2.164 6.479 4.7 12.825 7.595 19.01h84.317c-3.064 6.54-6.52 12.889-10.347 19.013h-63.625c4.154 6.629 8.73 12.979 13.685 18.996h36.258c-5.57 6.772-11.63 13.126-18.13 19.012 31.86 28.867 74.118 46.454 120.5 46.454 99.138-.001 179.51-80.362 179.51-179.5 0-99.13-80.37-179.5-179.51-179.5' fill='%23909090'/%3E%3Cpath d='m666.08 350.06c0-3.201 2.592-5.801 5.796-5.801s5.796 2.6 5.796 5.801c0 3.199-2.592 5.799-5.796 5.799-3.202-.001-5.797-2.598-5.796-5.799zm5.796 4.408c2.435-.001 4.407-1.975 4.408-4.408 0-2.433-1.972-4.404-4.404-4.404h-.004c-2.429-.004-4.4 1.963-4.404 4.392v.013c-.003 2.432 1.967 4.406 4.399 4.408.001-.001.003-.001.005-.001zm-.783-1.86h-1.188v-5.094h2.149c.45 0 .908 0 1.305.254.413.278.646.77.646 1.278 0 .57-.337 1.104-.883 1.312l.937 2.25h-1.315l-.78-2.016h-.87v2.016zm0-2.89h.658c.246 0 .504.02.725-.1.196-.125.296-.359.296-.584 0-.195-.12-.42-.288-.516-.207-.131-.536-.101-.758-.101h-.633zm-443.5-80.063c-2.045-.237-2.945-.301-4.35-.301-11.045 0-16.637 3.789-16.637 11.268 0 4.611 2.73 7.546 6.987 7.546 7.938 0 13.659-7.56 14-18.513zm14.171 32.996h-16.146l.371-7.676c-4.925 6.067-11.496 8.95-20.425 8.95-10.562 0-17.804-8.25-17.804-20.229 0-18.024 12.596-28.54 34.217-28.54 2.208 0 5.041.2 7.941.569.605-2.441.763-3.486.763-4.8 0-4.908-3.396-6.738-12.5-6.738-9.533-.108-17.396 2.271-20.625 3.334.204-1.23 2.7-16.658 2.7-16.658 9.712-2.846 16.117-3.917 23.325-3.917 16.733 0 25.596 7.512 25.58 21.712.032 3.805-.597 8.5-1.58 14.671-1.692 10.731-5.32 33.718-5.817 39.322zm-62.158 0h-19.488l11.163-69.997-24.925 69.997h-13.28l-1.64-69.597-11.734 69.597h-18.242l15.238-91.054h28.02l1.7 50.966 17.092-50.966h31.167zm354.98-32.996c-2.037-.237-2.942-.301-4.342-.301-11.041 0-16.634 3.789-16.634 11.268 0 4.611 2.726 7.546 6.983 7.546 7.939 0 13.664-7.56 13.993-18.513zm14.183 32.996h-16.145l.365-7.676c-4.925 6.067-11.5 8.95-20.42 8.95-10.566 0-17.8-8.25-17.8-20.229 0-18.024 12.587-28.54 34.212-28.54 2.208 0 5.037.2 7.934.569.604-2.441.763-3.486.763-4.8 0-4.908-3.392-6.738-12.496-6.738-9.533-.108-17.388 2.271-20.63 3.334.205-1.23 2.709-16.658 2.709-16.658 9.713-2.846 16.113-3.917 23.312-3.917 16.741 0 25.604 7.512 25.588 21.712.032 3.805-.597 8.5-1.58 14.671-1.682 10.731-5.32 33.718-5.812 39.322zm-220.39-1.125c-5.334 1.68-9.492 2.399-14 2.399-9.963 0-15.4-5.725-15.4-16.267-.142-3.27 1.433-11.879 2.67-19.737 1.125-6.917 8.45-50.53 8.45-50.53h19.371l-2.262 11.209h11.7l-2.643 17.796h-11.742c-2.25 14.083-5.454 31.625-5.491 33.95 0 3.817 2.037 5.483 6.67 5.483 2.221 0 3.941-.226 5.255-.7zm59.391-.6c-6.654 2.033-13.075 3.017-19.879 3-21.683-.021-32.987-11.346-32.987-33.032 0-25.313 14.38-43.947 33.9-43.947 15.97 0 26.17 10.433 26.17 26.796 0 5.429-.7 10.729-2.387 18.212h-38.575c-1.304 10.742 5.57 15.217 16.837 15.217 6.935 0 13.188-1.43 20.142-4.663zm-10.887-43.9c.107-1.543 2.054-13.217-9.013-13.217-6.171 0-10.583 4.704-12.38 13.217zm-123.42-5.017c0 9.367 4.541 15.825 14.841 20.676 7.892 3.709 9.113 4.809 9.113 8.17 0 4.617-3.48 6.7-11.192 6.7-5.812 0-11.22-.907-17.458-2.92 0 0-2.563 16.32-2.68 17.101 4.43.966 8.38 1.861 20.28 2.19 20.562 0 30.058-7.829 30.058-24.75 0-10.175-3.975-16.146-13.737-20.633-8.171-3.75-9.109-4.588-9.109-8.046 0-4.004 3.238-6.046 9.538-6.046 3.825 0 9.05.408 14 1.113l2.775-17.175c-5.046-.8-12.696-1.442-17.15-1.442-21.8 0-29.346 11.387-29.279 25.062m229.09-23.116c5.413 0 10.459 1.42 17.413 4.92l3.187-19.762c-2.854-1.12-12.904-7.7-21.416-7.7-13.042 0-24.066 6.47-31.82 17.15-11.31-3.746-15.959 3.825-21.659 11.367l-5.062 1.179c.383-2.483.73-4.95.613-7.446h-17.896c-2.445 22.917-6.779 46.13-10.171 69.075l-.884 4.976h19.496c3.254-21.143 5.038-34.681 6.121-43.842l7.342-4.084c1.096-4.08 4.529-5.458 11.416-5.292-.926 5.008-1.389 10.09-1.383 15.184 0 24.225 13.071 39.308 34.05 39.308 5.404 0 10.042-.712 17.221-2.657l3.431-20.76c-6.46 3.18-11.761 4.676-16.561 4.676-11.328 0-18.183-8.362-18.183-22.184-.001-20.05 10.195-34.108 24.745-34.108'/%3E%3Cpath d='m185.21 297.24h-19.491l11.17-69.988-24.925 69.988h-13.282l-1.642-69.588-11.733 69.588h-18.243l15.238-91.042h28.02l.788 56.362 18.904-56.362h30.267z' fill='%23fff'/%3E%3Cpath d='m647.52 211.6-4.319 26.308c-5.33-7.012-11.054-12.087-18.612-12.087-9.834 0-18.784 7.454-24.642 18.425-8.158-1.692-16.597-4.563-16.597-4.563l-.004.067c.658-6.133.92-9.875.862-11.146h-17.9c-2.437 22.917-6.77 46.13-10.157 69.075l-.893 4.976h19.492c2.633-17.097 4.65-31.293 6.133-42.551 6.659-6.017 9.992-11.267 16.721-10.917-2.979 7.206-4.725 15.504-4.725 24.017 0 18.513 9.367 30.725 23.534 30.725 7.141 0 12.62-2.462 17.966-8.17l-.912 6.884h18.433l14.842-91.043zm-24.37 73.942c-6.634 0-9.983-4.909-9.983-14.597 0-14.553 6.271-24.875 15.112-24.875 6.695 0 10.32 5.104 10.32 14.508.001 14.681-6.369 24.964-15.449 24.964z'/%3E%3Cpath d='m233.19 264.26c-2.042-.236-2.946-.3-4.346-.3-11.046 0-16.634 3.788-16.634 11.267 0 4.604 2.73 7.547 6.98 7.547 7.945-.001 13.666-7.559 14-18.514zm14.179 32.984h-16.146l.367-7.663c-4.921 6.054-11.5 8.95-20.421 8.95-10.567 0-17.804-8.25-17.804-20.229 0-18.032 12.591-28.542 34.216-28.542 2.209 0 5.042.2 7.938.571.604-2.442.762-3.487.762-4.808 0-4.908-3.391-6.73-12.496-6.73-9.537-.108-17.395 2.272-20.629 3.322.204-1.226 2.7-16.638 2.7-16.638 9.709-2.858 16.121-3.93 23.321-3.93 16.738 0 25.604 7.518 25.588 21.705.029 3.82-.605 8.512-1.584 14.675-1.687 10.725-5.32 33.725-5.812 39.317zm261.38-88.592-3.192 19.767c-6.95-3.496-12-4.921-17.407-4.921-14.551 0-24.75 14.058-24.75 34.107 0 13.821 6.857 22.181 18.183 22.181 4.8 0 10.096-1.492 16.554-4.677l-3.42 20.75c-7.184 1.959-11.816 2.672-17.226 2.672-20.976 0-34.05-15.084-34.05-39.309 0-32.55 18.059-55.3 43.888-55.3 8.507.001 18.562 3.609 21.42 4.73m31.442 55.608c-2.041-.236-2.941-.3-4.346-.3-11.042 0-16.634 3.788-16.634 11.267 0 4.604 2.729 7.547 6.984 7.547 7.937-.001 13.662-7.559 13.996-18.514zm14.179 32.984h-16.15l.37-7.663c-4.924 6.054-11.5 8.95-20.42 8.95-10.563 0-17.804-8.25-17.804-20.229 0-18.032 12.595-28.542 34.212-28.542 2.213 0 5.042.2 7.941.571.601-2.442.763-3.487.763-4.808 0-4.908-3.392-6.73-12.496-6.73-9.533-.108-17.396 2.272-20.629 3.322.204-1.226 2.704-16.638 2.704-16.638 9.709-2.858 16.116-3.93 23.316-3.93 16.742 0 25.604 7.518 25.583 21.705.034 3.82-.595 8.512-1.579 14.675-1.682 10.725-5.324 33.725-5.811 39.317zm-220.39-1.122c-5.338 1.68-9.496 2.409-14 2.409-9.963 0-15.4-5.726-15.4-16.266-.138-3.281 1.437-11.881 2.675-19.738 1.12-6.926 8.446-50.533 8.446-50.533h19.367l-2.259 11.212h9.942l-2.646 17.788h-9.975c-2.25 14.091-5.463 31.619-5.496 33.949 0 3.83 2.042 5.483 6.671 5.483 2.22 0 3.938-.217 5.254-.692zm59.392-.591c-6.65 2.033-13.08 3.013-19.88 3-21.684-.021-32.987-11.346-32.987-33.033 0-25.321 14.38-43.95 33.9-43.95 15.97 0 26.17 10.429 26.17 26.8 0 5.433-.7 10.733-2.382 18.212h-38.575c-1.306 10.741 5.569 15.221 16.837 15.221 6.93 0 13.188-1.434 20.137-4.676zm-10.892-43.912c.117-1.538 2.059-13.217-9.013-13.217-6.166 0-10.579 4.717-12.375 13.217zm-123.42-5.004c0 9.365 4.542 15.816 14.842 20.675 7.891 3.708 9.112 4.812 9.112 8.17 0 4.617-3.483 6.7-11.187 6.7-5.817 0-11.225-.908-17.467-2.92 0 0-2.554 16.32-2.67 17.1 4.42.967 8.374 1.85 20.274 2.191 20.567 0 30.059-7.829 30.059-24.746 0-10.18-3.971-16.15-13.738-20.637-8.167-3.758-9.112-4.583-9.112-8.046 0-4 3.245-6.058 9.541-6.058 3.821 0 9.046.42 14.004 1.125l2.771-17.18c-5.041-.8-12.691-1.441-17.146-1.441-21.804 0-29.345 11.379-29.283 25.067m398.45 50.629h-18.437l.917-6.893c-5.347 5.717-10.825 8.18-17.967 8.18-14.168 0-23.53-12.213-23.53-30.725 0-24.63 14.521-45.393 31.709-45.393 7.558 0 13.28 3.088 18.604 10.096l4.325-26.308h19.221zm-28.745-17.109c9.075 0 15.45-10.283 15.45-24.953 0-9.405-3.63-14.509-10.325-14.509-8.838 0-15.116 10.317-15.116 24.875-.001 9.686 3.357 14.587 9.991 14.587zm-56.843-56.929c-2.439 22.917-6.773 46.13-10.162 69.063l-.891 4.975h19.491c6.971-45.275 8.658-54.117 19.588-53.009 1.742-9.266 4.982-17.383 7.399-21.479-8.163-1.7-12.721 2.913-18.688 11.675.471-3.787 1.334-7.466 1.163-11.225zm-160.42 0c-2.446 22.917-6.78 46.13-10.167 69.063l-.887 4.975h19.5c6.962-45.275 8.646-54.117 19.569-53.009 1.75-9.266 4.992-17.383 7.4-21.479-8.154-1.7-12.716 2.913-18.678 11.675.47-3.787 1.325-7.466 1.162-11.225zm254.57 68.242c0-3.214 2.596-5.8 5.796-5.8 3.197-.003 5.792 2.587 5.795 5.785v.015c-.001 3.2-2.595 5.794-5.795 5.796-3.2-.002-5.794-2.596-5.796-5.796zm5.796 4.404c2.432.001 4.403-1.97 4.403-4.401v-.002c.003-2.433-1.968-4.406-4.399-4.408h-.004c-2.435.001-4.408 1.974-4.409 4.408.003 2.432 1.976 4.403 4.409 4.403zm-.784-1.87h-1.188v-5.084h2.154c.446 0 .908.008 1.296.254.416.283.654.767.654 1.274 0 .575-.338 1.113-.888 1.317l.941 2.236h-1.319l-.78-2.008h-.87v2.008zm0-2.88h.654c.245 0 .513.018.729-.1.195-.125.295-.361.295-.587-.009-.21-.115-.404-.287-.524-.204-.117-.542-.085-.763-.085h-.629v1.296z' fill='%23fff'/%3E%3C/svg%3E");
    }
    .visa {
      background-image: url("data:image/svg+xml,%0A%3Csvg enable-background='new 0 0 780 500' height='50' viewBox='0 0 780 500' width='78' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='m40 0h700c22.092 0 40 17.909 40 40v420c0 22.092-17.908 40-40 40h-700c-22.091 0-40-17.908-40-40v-420c0-22.091 17.909-40 40-40z' fill='%233c3c3c'/%3E%3Cpath d='m293.2 348.73 33.361-195.76h53.36l-33.385 195.76zm246.11-191.54c-10.57-3.966-27.137-8.222-47.822-8.222-52.725 0-89.865 26.55-90.18 64.603-.299 28.13 26.514 43.822 46.752 53.186 20.771 9.595 27.752 15.714 27.654 24.283-.131 13.121-16.586 19.116-31.922 19.116-21.357 0-32.703-2.967-50.227-10.276l-6.876-3.11-7.489 43.823c12.463 5.464 35.51 10.198 59.438 10.443 56.09 0 92.5-26.246 92.916-66.882.199-22.269-14.016-39.216-44.801-53.188-18.65-9.055-30.072-15.099-29.951-24.268 0-8.137 9.668-16.839 30.557-16.839 17.449-.27 30.09 3.535 39.938 7.5l4.781 2.26zm137.31-4.223h-41.232c-12.773 0-22.332 3.487-27.941 16.234l-79.244 179.4h56.031s9.16-24.123 11.232-29.418c6.125 0 60.555.084 68.338.084 1.596 6.853 6.49 29.334 6.49 29.334h49.514l-43.188-195.64zm-65.418 126.41c4.412-11.279 21.26-54.723 21.26-54.723-.316.522 4.379-11.334 7.074-18.684l3.605 16.879s10.219 46.729 12.354 56.528zm-363.3-126.41-52.24 133.5-5.567-27.13c-9.725-31.273-40.025-65.155-73.898-82.118l47.766 171.2 56.456-.064 84.004-195.39h-56.521' fill='%23fff'/%3E%3Cpath d='m146.92 152.96h-86.041l-.681 4.073c66.938 16.204 111.23 55.363 129.62 102.41l-18.71-89.96c-3.23-12.395-12.597-16.094-24.186-16.527' fill='%23909090'/%3E%3C/svg%3E");
    }

    input[type="checkbox"] {
      cursor: pointer;
      filter: brightness(120%) hue-rotate(-51deg) saturate(53%) contrast(300%);
      transform: scale(1.3);
      margin-right: 0.5rem;
    }
  </style>
</head>

<body>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/pixelbody.php'); ?>	
<?php include($_SERVER['DOCUMENT_ROOT'].'/tailwind/shared/components/header.php'); ?>
  

<div class="bg-gray-50">
  <div class="container container-md mx-auto py-20 px-5 md:px-8">
    <h2 class="sr-only">Checkout</h2>

    <form id="step_1" action="process.php" method="POST" class="lg:grid lg:grid-cols-2 lg:gap-x-12 xl:gap-x-16">
      <div>
        <div>
          <h2 class="text-lg font-medium text-gray-900">Contact information</h2>

          <div class="mt-4 input-wrap">
            <label for="email-address" class="block text-sm font-medium text-gray-700">Email address*</label>
            <div class="mt-1">
              <input required type="email" id="email-address" name="email-address" autocomplete="email" class="input lock w-full border border-gray-300 px-3 py-2 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
          </div>
          <div class="mt-4 input-wrap">
            <label for="phone" class="block text-sm font-medium text-gray-700">Phone*</label>
            <div class="mt-1">
              <input required type="tel" name="phone" id="phone" autocomplete="tel" class="input block w-full border border-gray-300 px-3 py-2 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
          </div>
        </div>

        <!-- shipping options are not needed -->
        <div class="mt-10 border-t border-gray-200 pt-10 hidden">
          <fieldset>
            <legend class="text-lg font-medium text-gray-900">Delivery method</legend>

            <div class="mt-4 grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-4">
              <!--
                Checked: "border-transparent", Not Checked: "border-gray-300"
                Active: "ring-2 ring-indigo-500"
              -->
              <label id="shipping-standard" onclick="selectShipping(false)" class="relative bg-white border rounded-lg  p-4 flex cursor-pointer focus:outline-none">
                <input type="radio" name="shipping-method" value="Standard" class="sr-only" aria-labelledby="shipping-standard-label" aria-describedby="shipping-standard-description-0 shipping-standard-description-1">
                <span class="flex-1 flex">
                  <span class="flex flex-col">
                    <span id="shipping-standard-label" class="block text-sm font-medium text-gray-900"> Standard </span>
                    <span id="shipping-standard-description-0" class="mt-1 flex items-center text-sm text-gray-500"> 4–10 business days </span>
                    <span id="shipping-standard-description-1" class="mt-6 text-sm font-medium text-gray-900"> $<?= $ship_standard; ?> </span>
                  </span>
                </span>
                <!--
                  Not Checked: "hidden"
                  Heroicon name: solid/check-circle
                -->
                <svg class="h-5 w-5 text-indigo-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                </svg>
                <!--
                  Active: "border", Not Active: "border-2"
                  Checked: "border-indigo-500", Not Checked: "border-transparent"
                -->
                <span class="absolute -inset-px rounded-lg border-2 pointer-events-none" aria-hidden="true"></span>
              </label>

              <!--
                Checked: "border-transparent", Not Checked: "border-gray-300"
                Active: "ring-2 ring-indigo-500"
              -->
              <label id="shipping-express" onclick="selectShipping(true)" class="relative bg-white border rounded-lg  p-4 flex cursor-pointer focus:outline-none">
                <input type="radio" name="shipping-method" value="Express" class="sr-only" aria-labelledby="shipping-express-label" aria-describedby="shipping-express-description-0 shipping-express-description-1">
                <span class="flex-1 flex">
                  <span class="flex flex-col">
                    <span id="shipping-express-label" class="block text-sm font-medium text-gray-900"> Express </span>
                    <span id="shipping-express-description-0" class="mt-1 flex items-center text-sm text-gray-500"> 2–5 business days </span>
                    <span id="shipping-express-description-1" class="mt-6 text-sm font-medium text-gray-900"> $<?= $ship_express; ?> </span>
                  </span>
                </span>
                <!--
                  Not Checked: "hidden"

                  Heroicon name: solid/check-circle
                -->
                <svg class="h-5 w-5 text-indigo-600 hidden" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                </svg>
                <!--
                  Active: "border", Not Active: "border-2"
                  Checked: "border-indigo-500", Not Checked: "border-transparent"
                -->
                <span class="absolute -inset-px rounded-lg border-2 pointer-events-none" aria-hidden="true"></span>
              </label>
            </div>
          </fieldset>
        </div>

        <!-- toggle if not same as billing -->
        <div class="mt-10 border-t border-gray-200 pt-10">
          <h2 class="text-lg font-medium text-gray-900">Shipping information</h2>

          <div class="mt-4 grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-4">
            <div class="input-wrap">
              <label for="shipping-first-name" class="block text-sm font-medium text-gray-700">First Name*</label>
              <div class="mt-1">
                <input required type="text" id="shipping-first-name" name="shipping-first-name" autocomplete="given-name" class="input block w-full border border-gray-300 px-3 py-2  focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
              </div>
            </div>

            <div class="input-wrap">
              <label for="shipping-last-name" class="block text-sm font-medium text-gray-700">Last Name*</label>
              <div class="mt-1">
                <input required type="text" id="shipping-last-name" name="shipping-last-name" autocomplete="family-name" class="input block w-full border border-gray-300 px-3 py-2  focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
              </div>
            </div>

            <div class="input-wrap sm:col-span-2">
              <label for="shipping-address" class="block text-sm font-medium text-gray-700">Address*</label>
              <div class="mt-1">
                <input required type="text" name="shipping-address" id="shipping-address" autocomplete="street-address" class="input block w-full border border-gray-300 px-3 py-2  focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
              </div>
            </div>

            <div class="input-wrap sm:col-span-2">
              <label for="shipping-address-2" class="block text-sm font-medium text-gray-700">Address cont.</label>
              <div class="mt-1">
                <input type="text" name="shipping-address-2" id="shipping-address-2" class="input block w-full border border-gray-300 px-3 py-2  focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
              </div>
            </div>

            <div class="input-wrap">
              <label for="shipping-city" class="block text-sm font-medium text-gray-700">City*</label>
              <div class="mt-1">
                <input required type="text" name="shipping-city" id="shipping-city" autocomplete="address-level2" class="input block w-full border border-gray-300 px-3 py-2  focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
              </div>
            </div>

            <div class="input-wrap">
              <label for="shipping-region" class="block text-sm font-medium text-gray-700">State/Prov.*</label>
              <div class="mt-1">
                <input required type="text" name="shipping-region" id="shipping-region" autocomplete="address-level1" class="input block w-full border border-gray-300 px-3 py-2  focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
              </div>
            </div>

            <div class="input-wrap">
              <label for="shipping-country" class="block text-sm font-medium text-gray-700">Country*</label>
              <div class="mt-1">
                <select required id="shipping-country" name="shipping-country" autocomplete="country-name" class="input block w-full border border-gray-300 px-3 py-2  focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                  <!-- TODO: iterate over countries for values -->
                  <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/html/billing-countries.php'); ?>
                </select>
              </div>
            </div>

            <div class="input-wrap">
              <label for="shipping-postal-code" class="block text-sm font-medium text-gray-700">Postal Code*</label>
              <div class="mt-1">
                <input required type="text" name="shipping-postal-code" id="shipping-postal-code" autocomplete="postal-code" class="input block w-full border border-gray-300 px-3 py-2  focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
              </div>
            </div>

          </div>
        </div>

        <div class="mt-10 border-t border-gray-200 pt-10">
					<input id="check-billing-shipping" type="checkbox" name="billingSameAsShipping" id="same" value="1" checked="true" onchange="updateBilling();">
          <label for="same">Billing Address same as shipping?</label>
        </div>

        <div id="billing-info" class="mt-0 border-gray-200 pt-10 hidden">
          <h2 class="text-lg font-medium text-gray-900">Billing information</h2>

          <div class="mt-4 grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-4">
            <div class="input-wrap">
              <label for="first-name" class="block text-sm font-medium text-gray-700">First Name*</label>
              <div class="mt-1">
                <input  type="text" id="billing-first-name" name="first-name" autocomplete="given-name" class="input block w-full border border-gray-300 px-3 py-2  focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
              </div>
            </div>

            <div class="input-wrap">
              <label for="last-name" class="block text-sm font-medium text-gray-700">Last Name*</label>
              <div class="mt-1">
                <input  type="text" id="billing-last-name" name="last-name" autocomplete="family-name" class="input block w-full border border-gray-300 px-3 py-2  focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
              </div>
            </div>

            <div class="input-wrap sm:col-span-2">
              <label for="address" class="block text-sm font-medium text-gray-700">Address*</label>
              <div class="mt-1">
                <input  type="text" name="address" id="billing-address" autocomplete="street-address" class="input block w-full border border-gray-300 px-3 py-2  focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
              </div>
            </div>

            <div class="input-wrap sm:col-span-2">
              <label for="address-2" class="block text-sm font-medium text-gray-700">Address Cont.*</label>
              <div class="mt-1">
                <input type="text" name="address-2" id="billing-address-2" class="input block w-full border border-gray-300 px-3 py-2  focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
              </div>
            </div>

            <div class="input-wrap">
              <label for="city" class="block text-sm font-medium text-gray-700">City*</label>
              <div class="mt-1">
                <input  type="text" name="city" id="billing-city" autocomplete="address-level2" class="input block w-full border border-gray-300 px-3 py-2  focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
              </div>
            </div>

            <div class="input-wrap">
              <label for="region" class="block text-sm font-medium text-gray-700">State/Prov.*</label>
              <div class="mt-1">
                <input  type="text" name="region" id="billing-region" autocomplete="address-level1" class="input block w-full border border-gray-300 px-3 py-2  focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
              </div>
            </div>

            <div class="input-wrap">
              <label for="country" class="block text-sm font-medium text-gray-700">Country*</label>
              <div class="mt-1">
                <select  id="billing-country" name="country" autocomplete="country-name" class="input block w-full border border-gray-300 px-3 py-2  focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/html/billing-countries.php'); ?>
                </select>
              </div>
            </div>

            <div class="input-wrap">
              <label for="postal-code" class="block text-sm font-medium text-gray-700">Postal Code*</label>
              <div class="mt-1">
                <input  type="text" name="postal-code" id="billing-postal-code" autocomplete="postal-code" class="input block w-full border border-gray-300 px-3 py-2  focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
              </div>
            </div>

          </div>
        </div>

        <!-- Payment -->
        <div class="mt-10 border-t border-gray-200 pt-10">
          <div class="flex justify-between flex-wrap">
            <h2 class="text-lg font-medium text-gray-900 pb-2">Payment</h2>
            <div class="flex justify-center">
              <div class="credit-card visa mr-3"></div>
              <div class="credit-card mc mr-3"></div>
              <div class="credit-card disc mr-3"></div>
              <div class="credit-card amex"></div>
            </div>
          </div>

          <div class="mt-6 grid grid-cols-4 gap-y-6 gap-x-4">
            <div class="input-wrap col-span-4">
              <label for="card-number" class="block text-sm font-medium text-gray-700">Card Number*</label>
              <div class="mt-1">
                <input required type="text" id="card-number" name="card-number" autocomplete="cc-number" class="input block w-full border border-gray-300 px-3 py-2  focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
              </div>
            </div>

            <div class="input-wrap col-span-4">
              <label for="name-on-card" class="block text-sm font-medium text-gray-700">Name on Card*</label>
              <div class="mt-1">
                <input required type="text" id="name-on-card" name="name-on-card" autocomplete="cc-name" class="input block w-full border border-gray-300 px-3 py-2  focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
              </div>
            </div>

            <div class="input-wrap col-span-3">
              <label for="expiration-date" class="block text-sm font-medium text-gray-700">Expiration Date*</label>
              <div class="mt-1">
                <input type="text"
                  placeholder="MM/YY" 
                  pattern="/^(0[1-9]|1[0-2])\/?([22-99]{2})$/" 
                  maxlength="5" 
                  name="expiration-date" 
                  id="expiration-date" 
                  autocomplete="cc-exp" 
                  data-pristine-pattern-message="Must be a future date (MM/YY)"
                  class="input block w-full border border-gray-300 px-3 py-2  focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
              </div>
            </div>

            <div class="input-wrap">
              <label for="cvc" class="block text-sm font-medium text-gray-700">CVC*</label>
              <div class="mt-1">
                <input required type="text" name="cvc" id="cvc" pattern="/[1-9]{3}/" maxlength="3" autocomplete="csc" class="input block w-full border border-gray-300 px-3 py-2  focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Order summary -->
      <div class="mt-10 lg:mt-0">
        <h2 class="text-lg font-medium text-gray-900">Order summary</h2>

        <div class="mt-4 bg-white border border-gray-200 rounded-lg ">
          <h3 class="sr-only">Items in your cart</h3>
          <ul role="list" class="divide-y divide-gray-200">

            <!-- iterate over products -->
            <?php foreach($products as $product): ?>
            <li id="product-<?= $product['pid']; ?>" class="flex py-6 px-4 sm:px-6">
              <div class="flex-shrink-0">
                <img src="<?= $product['imgURL']; ?>" alt="<?= $product['imgDescription']; ?>" class="w-20 border">
              </div>

              <div class="ml-6 flex-1 flex flex-col">
                <div class="flex">
                  <div class="min-w-0 flex-1">
                    <h4 class="text-sm">
                      <a href="#" class="font-medium text-gray-700 hover:text-gray-800"><?= $product['title']; ?></a>
                    </h4>
                    <p class="mt-1 text-sm text-gray-500"><?= $product['description']; ?></p>
                    <p class="mt-1 text-sm text-gray-500"><?= $product['size']; ?></p>
                  </div>

                  <div class="ml-4 flex-shrink-0 flow-root">
                    <button onclick="removeProduct('<?= $product['pid']; ?>', event)" type="button" class="-m-2.5 bg-white p-2.5 flex items-center justify-center text-gray-400 hover:text-gray-500" title="remove product">
                      <span class="sr-only">Remove</span>
                      <!-- Heroicon name: solid/trash -->
                      <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                      </svg>
                    </button>
                  </div>
                </div>

                <div class="flex-1 pt-2 flex items-end justify-between">
                  <p id="price-<?= $product['pid']; ?>" class="mt-1 text-sm font-medium text-gray-900"><?= $product['price']; ?></p>

                  <!-- quantity not needed -->
                  <div class="ml-4 invisible">
                    <label for="quantity" class="sr-only">Quantity</label>
                    <select id="quantity" name="quantity-<?= $product['pid']; ?>" class=" border border border-gray-300 px-3 py-2text-base font-medium text-gray-700 text-left  focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                      <option value="8">8</option>
                      <option value="9">9</option>
                    </select>
                  </div>
                </div>
              </div>
            </li>
            <?php endforeach; ?>

            <!-- no products -->
            <?php if(empty($products)): ?>
            <div class="flex justify-center text-gray-400 text-xl p-6">
              No products in cart.
            </div>
            <?php endif; ?>

            <!-- More products... -->
          </ul>
          <dl class="border-t border-gray-200 py-6 px-4 space-y-6 sm:px-6">
            <div class="flex items-center justify-between">
              <dt class="text-sm">Subtotal</dt>
              <dd class="text-sm font-medium text-gray-900">$<span id="sub-total"></span></dd>
            </div>
            <div class="flex items-center justify-between">
              <dt class="text-sm">Shipping</dt>
              <dd class="text-sm font-medium text-gray-900">$<span id="shipping"><?= $ship_cost; ?></span></dd>
            </div>
            <!-- <div class="flex items-center justify-between">
              <dt class="text-sm">Taxes</dt>
              <dd class="text-sm font-medium text-gray-900">$<span id="sales-tax"></span> </dd>
            </div> -->
            <div class="flex items-center justify-between border-t border-gray-200 pt-6">
              <dt class="text-base font-medium">Total</dt>
              <dd class="text-base font-medium text-gray-900">$<span id="total"></span></dd>
            </div>
          </dl>

          <div class="border-t border-gray-200 py-6 px-4 sm:px-6">
            <div id="error-wrapper" class="flex flex-col mb-2 text-red-600 text-sm mb-5 hidden">
              <!-- input errors are injected here -->
            </div>
            <button 
              id="confirm-button"
              type="submit" 
              disabled="true"
              class="w-full bg-green-500 border border-transparent rounded-md py-3 px-4 text-base font-medium text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-50 focus:ring-indigo-500 disabled:opacity-75">
              Confirm order
            </button>
          </div>
        </div>
        <div class="p-4 text-gray-600">
          <label for="termsagree">
						<input type="checkbox" value="1" id="termsagree" name="termsagree" class="clickable">  By clicking this button I agree to the <a href="/tailwind/terms" target="_blank" class="underline text-blue-800 clickable">terms and conditions</a> and <a href="/tailwind/privacy" target="_blank" class="underline text-blue-800 clickable">privacy policy</a> including allowing my card to be charged $<span class="totaldue">0.00</span> today, and <br>
						<p>Your Card Will Be Billed As Supernaturalman</p>
					</label>
        </div>
        
      </div>
    </form>
  </div>
</div>


<script>
  // toggle standard and express shipping select
  var expressShipping = false;
  var standard = document.getElementById('shipping-standard');
  var express = document.getElementById('shipping-express');
  var shipCost = document.getElementById('shipping');
  function selectShipping(isExpress) {
    expressShipping = isExpress;
    // if (isExpress) {
    //   updateShippingStyle(express, true);
    //   updateShippingStyle(standard, false);
    //   shipCost.innerHTML = <?= $ship_express; ?>;
    // } else {
    //   updateShippingStyle(express, false);
    //   updateShippingStyle(standard, true);
    //   shipCost.innerHTML = <?= $ship_standard; ?>;
    // }
    shipCost.innerHTML = <?= $ship_cost; ?>;
    updateTotal();
  }

  // toggle standard and express shipping selected style
  function updateShippingStyle(el, show) {
    var svg = el.querySelector('svg');
    var input = el.querySelector('input');
    show ? svg.classList.remove('hidden') : svg.classList.add('hidden');
    show ? input.checked = true : input.checked = false;
  }

  // use pid to remove element from dom
  function removeProduct(pid, event) {
    var button = event.currentTarget;
    var element = document.getElementById(`product-${pid}`);
    if (button.classList.contains('bg-red-600')) {
      element.remove();
      updateTotal();
    } else {
      button.className += ' bg-red-600 rounded-full text-white hover:text-gray-300';
      button.title = 'Are you sure?';
    }
  }
  
  // monitor form changes on keyup/changes
  const form = document.getElementById('step_1');
  var inputs = form.querySelectorAll('input');
  var selects = form.querySelectorAll('select');
  // var textareas = form.querySelectorAll('textarea');
  var formData = {};

  var appendValue = function (event) {
    let key = event.target.name;
    let val = event.target.value;
    console.log('---->', key, val);
    formData[key] = val;
    updateErrors();
    updateTotal();
  };

  selects.forEach(select => {
    select.addEventListener('change', (event)=> {
      appendValue(event)
    });
  });

  inputs.forEach(input => {
    input.addEventListener('keyup', debounce(appendValue, event, 350));
  });

  // debounce for less annoying input errors
  function debounce(functionName, args, interval) {
    var timeout;

    return function() {
      var context = this, args = arguments;
      var later = function() {
        timeout = null;
        functionName.apply(context, args);
      };          
      clearTimeout(timeout);
      timeout = setTimeout(later, interval);
    };
  };

  // updates order summary totals
  var sub = document.getElementById('sub-total');
  var ship = document.getElementById('shipping');
  // var tax = document.getElementById('sales-tax');
  var total = document.getElementById('total');
  function updateTotal() {
    subTotal = 0;
    var products = document.querySelectorAll('[id^="price-"]');
    products.forEach(product => {
      var quantity = document.querySelector(`#${product.id} ~ div>select`);
      subTotal = (subTotal + parseFloat(product.innerHTML)) * quantity.value;
    })
    sub.innerHTML = subTotal;
    ship.innerHTML = ship.innerHTML ? parseFloat(ship.innerHTML) : 0;
    // adjust sales tax here (0.000001 doesnt pass float, value is zero)
    let salesTax = parseFloat(sub.innerHTML) * 0.000001;
    // tax.innerHTML =  salesTax.toFixed(2);
    let salesTotal = subTotal + parseFloat(ship.innerHTML) + salesTax;
    total.innerHTML = salesTotal.toFixed(2);
  }

  var billShipRadio = document.getElementById('check-billing-shipping');
  var billing = document.getElementById('billing-info');
  var billingInputs = document.querySelectorAll('[id^="billing-"]')
  function updateBilling() {
    if (billShipRadio.checked) {
      billing.classList.add('hidden');
      billingInputs.forEach(input => {
        input.required = false;
      })
    } else {
      billing.classList.remove('hidden');
      billingInputs.forEach(input => {
        input.required = true;
      })
      document.getElementById('billing-address-2').required = false;
    }
    // reset validation with new or removed inputs
    if (window.pristine) {
      pristine.destroy();
      pristine = new Pristine(form, config);
      updateErrors();
    }
  }

  // form validation with pristine.js
  var formIsValid = false;
  var errors = document.getElementById('error-wrapper');
  var allInputs = document.querySelectorAll('.input');
  let config = {
    // class of the parent element where the error/success class is added
    classTo: 'input-wrap',
    errorClass: 'input-error',
    successClass: 'input-success',
    // class of the parent element where error text element is appended
    errorTextParent: 'input-wrap',
    // type of element to create for the error text
    errorTextTag: 'div',
    // class of the error text element
    errorTextClass: 'text-sm text-red-600' 
  };

  var pristine = new Pristine(form, config);

  function updateErrors() {
    formIsValid = pristine.validate();
    let errors = pristine.getErrors();
    console.log(formData);
    console.log(formIsValid, errors);
    var confirmButton = document.getElementById('confirm-button');
    formIsValid ? confirmButton.classList.add('hover:bg-green-600') : confirmButton.classList.remove('hover:bg-green-600');
    confirmButton.disabled = !formIsValid;
  }

  window.onload = updateTotal();

</script>
</body>
<?php include($_SERVER['DOCUMENT_ROOT'].'/tailwind/shared/components/footer.php'); ?>

</html>