<!--
    php variables:
    $current_step = number 1,2,3; (applies classes for the three steps)
-->

<style>
  /* step bar */

.steps {
  font-family: sans-serif;
  display: flex;
  white-space: nowrap;
  width: 100%;
}
.step {
  position: relative;
  display: flex;
  padding: 1em;
  line-height: 1.2;
  text-align: center;
  text-decoration: none;
  color: #444;
  background: #c3cad1;
  width: 33.3%;
  text-align: center;
  justify-content: center;
}
.step:not(:last-child) {
  margin-right: 2em;
}
.step::before,
.step::after {
  position: absolute;
  top: 0;
  bottom: 0;
  width: 0;
  border-style: solid;
  border-width: 1.6em 0.75em;
}
.step:not(:last-child)::after {
  content: '';
  left: 100%;
  border-color: transparent transparent transparent #c3cad1;
}
.step:not(:first-child)::before {
  content: '';
  right: 100%;
  border-color: #c3cad1 #c3cad1 #c3cad1 transparent;
}
.step:first-child {
  border-radius: 4px 0 0 4px;
}
.step:last-child {
  border-radius: 0 4px 4px 0;
}
.step.on {
	color: white;
	background-color: #0085c6;
}

.step.on:not(:last-child)::after {
  content: '';
  left: 100%;
  border-color: transparent transparent transparent #0085c6;
}

.step.on:not(:first-child)::before {
  content: '';
  right: 100%;
  border-color: #0085c6 #0085c6 #0085c6 transparent;
}

</style>

  <ul class="steps mx-auto">
    <li class="step <?php if ($current_step >= 1) echo 'on'; ?>">Step 1<span class="hidden md:block">: Contact Information</span></li>
    <li class="step <?php if ($current_step >= 2) echo 'on'; ?>">Step 2<span class="hidden md:block">: Shipping Information</span></li>
    <li class="step <?php if ($current_step == 3) echo 'on'; ?>">Step 3<span class="hidden md:block">: Complete Order</span></li>
  </ul>