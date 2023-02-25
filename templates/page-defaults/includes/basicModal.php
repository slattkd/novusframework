<!-- 
modal element that allows for custom title, body, and footer content
    Requires basic_modal.js served in the <head>
    php variables:
    $modal_id (string) = id to manage modal display
    $modal_title (string) = text content for title
    $max_width (string) = size: sm, md, lg, xl, 23456xl - defaults to max-w-[lg];
    $height (string) = fractions: 1/2 2/3 3/4 4/5 5/6 full - defaults to h-auto;
    $modal_body = html as string;
    $modal_footer = html as string;

    TODO: option for including page view (html/php files) as variable - getPage()
 -->

<style>
    .center-modal {
        display: flex;
        flex-direction: column;
        justify-content: center;
        background: transparent;
        height: 100vh;
    }

    .body-content {
        height: auto;
        border-top: 1px solid #e3e3e3;
        border-bottom: 1px solid #e3e3e3;
    }
    .modal-position {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: 100;
        transition: all 200ms ease-in-out;
        /* initial state */
        opacity: 0;
        margin-left: 0;
        margin-right: 0;
        margin-top: 0;
        margin-bottom: 0;
        display: none;
        background-color: rgba(0,0,0,0.75);
    }

    #legalLinkModal nav#nav, #legalLinkModal footer#footer {
        display: none;
    }
</style>
<div class="modal-position modal-bg sans" id="<?= $modal_id; ?>" style="margin-left: 0">
    <div id="modal-wrapper" role="alert" class="mx-auto center-modal max-w-md max-w-lg max-w-<?php echo $max_width ?? 'nada' ?>">
        <div class="flex flex-col relative p-3 md:p-6 bg-white shadow-md rounded border border-gray-400 h-auto <?php echo !empty($height) ? 'h-' . $height : ''; ?>" style="max-height: 90vh">
            <div class="title">
                <!-- insert title as innerHTML here -->
                <h1 id="title-content" class="text-2xl font-bold text-red-700"><?= $modal_title; ?></h1>
            </div>
            <div id="body-content" class="body-content flex-auto my-3 mt-1 py-4 overflow-y-scroll">
              <!-- insert body copy as innerHTML here -->
              <?= $modal_body; ?>
            </div>
            <div class="flex items-center justify-start w-full">
                <?= $modal_footer; ?>
                <!-- <button class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 transition duration-150 ease-in-out hover:bg-green-600 bg-green-600 rounded text-white px-8 py-2 text-sm">Submit</button>
                <button class="focus:outline-none focus:ring-2 focus:ring-offset-2  focus:ring-gray-400 ml-3 bg-gray-100 transition duration-150 text-gray-600 ease-in-out hover:border-gray-400 hover:bg-gray-300 border rounded px-8 py-2 text-sm" onclick="modalHandler()">Cancel</button> -->
            </div>
            <button class="cursor-pointer absolute top-0 right-0 mt-2 mr-2 text-gray-400 hover:text-gray-600 transition duration-150 ease-in-out rounded focus:ring-2 focus:outline-none focus:ring-gray-600" onclick="closeAll()" aria-label="close modal" role="button">
                <svg  xmlns="http://www.w3.org/2000/svg"  class="icon icon-tabler icon-tabler-x" width="20" height="20" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" />
                    <line x1="18" y1="6" x2="6" y2="18" />
                    <line x1="6" y1="6" x2="18" y2="18" />
                </svg>
            </button>
        </div>
    </div>
</div>
<!-- <div class="w-full flex justify-center py-12" id="button">
    <button class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 mx-auto transition duration-150 ease-in-out hover:bg-green-600 bg-green-600 rounded text-white px-4 sm:px-8 py-2 text-xs sm:text-sm" onclick="modalHandler(true)">Open Modal</button>
</div> -->