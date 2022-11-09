<style>
    .center-modal {
        display: flex;
        flex-direction: column;
        justify-content: center;
        background: transparent;
        height: 100vh;
    }

    .body-content {
        overflow-y: scroll;
        max-height: 400px;
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
        display: none;
        background-color: rgba(0,0,0,0.75);
    }
</style>
<div class="modal-position sans" id="<?= $modal_id; ?>">
    <div role="alert" class="container mx-auto w-11/12 md:w-2/3 max-w-lg center-modal">
        <div class="relative py-8 px-5 pb-4 md:px-10 bg-white shadow-md rounded border border-gray-400">
            <div class="title" style="margin-top: -1rem">
                <!-- insert title as innerHTML here -->
                <h1 id="title-content" class="text-2xl font-bold text-red-500"><?= $modal_title; ?></h1>
            </div>
            <div id="body-content" class="body-content my-3 py-4">
              <!-- insert body copy as innerHTML here -->
              <?= $modal_body; ?>
            </div>
            <div class="flex items-center justify-start w-full">
                <?= $modal_footer; ?>
                <!-- <button class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 transition duration-150 ease-in-out hover:bg-indigo-600 bg-indigo-700 rounded text-white px-8 py-2 text-sm">Submit</button>
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

<script>
    // modal on mouseleave
    document.documentElement.addEventListener('mouseleave', () => {
        //window.modalHandler('mouseModal', true);
    })

    // modal on navigate away
    window.addEventListener('popstate', function(e) {
       // window.modalHandler('mouseModal', true);
    });
</script>
<!-- <div class="w-full flex justify-center py-12" id="button">
    <button class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 mx-auto transition duration-150 ease-in-out hover:bg-indigo-600 bg-indigo-700 rounded text-white px-4 sm:px-8 py-2 text-xs sm:text-sm" onclick="modalHandler(true)">Open Modal</button>
</div> -->