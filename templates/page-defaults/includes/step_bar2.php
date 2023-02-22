/*
    php variables:
    $current_step = number 1,2,3; (applies classes for the three steps)
*/

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
  padding: 0.5rem 1rem;
  line-height: 1.2;
  text-align: center;
  text-decoration: none;
  color: #979797;
  background: #ededed;
  width: 33.3%;
  text-align: center;
  justify-content: center;
}

@media screen and (min-width: 769px) {
  .step {
    padding: 0.9rem 1rem;
  }
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
  border-width: 1rem 0.75rem;
}
@media screen and (min-width: 769px) {
  .step::before,
  .step::after {
    position: absolute;
    top: 0;
    bottom: 0;
    width: 0;
    border-style: solid;
    border-width: 1.4rem 0.75rem;
  }
}
.step:not(:last-child)::after {
  content: '';
  left: 100%;
  border-color: transparent transparent transparent #ededed;
}
.step:not(:first-child)::before {
  content: '';
  right: 100%;
  border-color: #ededed #ededed #ededed transparent;
}
.step:first-child {
  border-radius: 8px 0 0 8px;
}
.step:last-child {
  border-radius: 0 8px 8px 0;
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
  <ul class="steps mx-auto text-sm text-gray-500">
    <li class="step <?php if ($current_step == 1) echo 'on'; ?>">Step 1<span class="hidden md:block">: Contact Information</span></li>
    <li class="step <?php if ($current_step == 2) echo 'on'; ?>">Step 2<span class="hidden md:block">: Shipping Information</span></li>
    <li class="step <?php if ($current_step == 3) echo 'on'; ?>">Step 3<span class="hidden md:block">: Complete Order</span></li>
  </ul>