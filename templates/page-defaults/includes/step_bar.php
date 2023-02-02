<!--
    php variables:
    $current_step = number 1,2,3; (applies classes for the three steps)
-->

<style>
  .funnel-progress-icon {
    padding: 0px 7px;
    border: 2px solid #e3e3e3;
    background-color: #fff;
    border-radius: 50%;
    margin-right: 5px;
    font-weight: bold;
    color: gray;
  }
  .funnel-progress-icon.checked {
    background-color: #285BD4;
    padding: 1px 4px;
  }
  .funnel-progress-step {
    display: flex;
    flex-wrap: wrap;
    text-align: center;
    justify-content: center;
    align-items: center;
    padding: 10px 16px;
  }

  .checkmark {
    display:inline-block;
    width: 22px;
    height:22px;
    border-radius:50%;
    -ms-transform: rotate(45deg) scale(1.5); /* IE 9 */
    -webkit-transform: rotate(45deg) scale(1.5); /* Chrome, Safari, Opera */
    transform: rotate(45deg) scale(1.5);
  }

.checkmark:before{
  content: "";
  position: absolute;
  width: 2px;
  height: 11px;
  background-color: #fff;
  left: 14px;
  top: 6px;
}

.checkmark:after{
  content: "";
  position: absolute;
  width: 7px;
  height: 2px;
  background-color: #fff;
  left: 9px;
  top: 15px;
}

@media screen and (max-width: 769px) {
  .funnel-progress-step .font-semibold {
      font-size: 14px;
      line-height: 1.2em;
  }
  .funnel-progress-step .funnel-progress-icon {
    transform: scale(0.9);
  }
}

</style>

<section style="width:100%;">
  <div class="flex w-full funnel-progress bg-white border rounded mb-7 sans">
      <div class="funnel-progress-step w-1/3 <?php if ($current_step == 1) echo 'bg-yellow-100'; ?>">
          <?php if ($current_step > 1): ?>
            <div class="funnel-progress-icon checked"><span class="checkmark"></span></div>
          <?php else: ?>
            <div class="funnel-progress-icon">1</div>
          <?php endif; ?>
        <div class="font-semibold">Order Approved</div>
      </div>
      <div class="funnel-progress-step w-1/3 <?php if ($current_step == 2) echo 'bg-yellow-100'; ?>">
      <?php if ($current_step > 2): ?>
        <div class="funnel-progress-icon checked"><span class="checkmark"></span></div>
          <?php else: ?>
            <div class="funnel-progress-icon">2</div>
          <?php endif; ?>
        <div class="font-semibold">Customize Order</div>
      </div>
      <div class="funnel-progress-step w-1/3 <?php if ($current_step == 3) echo 'bg-yellow-100'; ?>">

      <?php if ($current_step > 3): ?>
        <div class="funnel-progress-icon checked"><span class="checkmark"></span></div>
          <?php else: ?>
            <div class="funnel-progress-icon">3</div>
          <?php endif; ?>
        <div class="font-semibold">Final Confirmation</div>

      </div>
  </div>
</section>