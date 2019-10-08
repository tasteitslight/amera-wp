<form class="pb-4" id="" onsubmit="return updateCalc();">
    <input 
      class=""
      type="text"
      id="initialGain"
      placeholder="1,000,000"
      value=""
    />
  <input
  class=""
  type="submit"
  value="Calculate" />
</form>

<div class="container calc__container mb-5">
  <div class="calc__table">
    <div class="row calc__row--sticky">
      <div class="col-12 col-md-6">
      </div>
      <div class="col-6 col-md-3 calc__col bg-red">
        Taxable Investment<br/>(Stocks, Bonds, etc)
      </div>
      <div class="col-6 col-md-3 calc__col bg-blue">
        AAAmerican<br/>Opportunity Fund
      </div>
    </div> <!--End Row-->

    <div class="row calc__row">
      <div class="col-12 col-md-6 calc__col">
        Capital Gain
      </div>
      <div class="col-6 col-md-3 calc__col capGain">
        $1,000,000
      </div>
      <div class="col-6 col-md-3 calc__col capGain">
        $1,000,000
      </div>
    </div> <!--End Row-->
    
    <div class="row calc__row">
      <div class="col-12 col-md-6 calc__col ">
        Top Federal Tax Paid on Original Gain - 23.8%
      </div>
      <div class="col-6 col-md-3 calc__col" id="initialFedTax">
        (238,000)
      </div>
      <div class="col-6 col-md-3 calc__col ">
        -
      </div>
    </div> <!--End Row-->
              
    <div class="row calc__row bg-grey border-top">
      <div class="col-12 col-md-6 calc__col ">
        Capital Available for a "New Investment" in 2019
      </div>
      <div class="col-6 col-md-3 calc__col" id="capAvail">
        $762,000
      </div>
      <div class="col-6 col-md-3 calc__col capGain">
        $1,000,000
      </div>
    </div> <!--End Row-->

    <div class="row">
      <div class="col-12 col-md-6 calc__col calc__col--spacer">
          
      </div>
      <div class="col-6 col-md-3 calc__col  calc__col--spacer">
          
      </div>
      <div class="col-6 col-md-3 calc__col  calc__col--spacer">
          
      </div>
    </div>
              
    <div class="row calc__row">
      <div class="col-12 col-md-6 calc__col ">
        Value of New Investment after 10 years<br/>
      </div>
      <div class="col-6 col-md-3 calc__col" id="newValue" >
        $1,447,800
      </div>
      <div class="col-6 col-md-3 calc__col" id="newValueB">
        $1,900,000
      </div>
    </div> <!--End Row-->
              
    <div class="row calc__row">
      <div class="col-12 col-md-6 calc__col ">
        Top Federal Tax on 85% of Original Gain due 2027
      </div>
      <div class="col-6 col-md-3 calc__col ">
        -
      </div>
      <div class="col-6 col-md-3 calc__col" id="tax85">
        (202,300) 
      </div>
    </div> <!--End Row-->
              
    <div class="row calc__row">
      <div class="col-12 col-md-6 calc__col ">
        Top Federal Tax on Disposition of New Investment in 2029<br/>
      </div>
      <div class="col-6 col-md-3 calc__col" id="tax2029">
        (163,220)
      </div>
      <div class="col-6 col-md-3 calc__col ">
        -
      </div>
    </div> <!--End Row-->
              
    <div class="row calc__row bg-grey border-top">
      <div class="col-12 col-md-6 calc__col  ">
        After Tax Proceeds
      </div>
      <div class="col-6 col-md-3 calc__col" id="afterTax">
        $1,284,580
      </div>
      <div class="col-6 col-md-3 calc__col" id="afterTaxB">
        $1,697,700
      </div>
    </div> <!--End Row-->

    <div class="row calc__row">
      <div class="col-12 col-md-6 calc__col">
        Less: Original Gain
      </div>
      <div class="col-6 col-md-3 calc__col capGain__neg">
        (1,000,000)
      </div>
      <div class="col-6 col-md-3 calc__col capGain__neg">
        (1,000,000)
      </div>
    </div> <!--End Row-->

    <div class="row calc__row bg-grey blueDashBorder final">
      <div class="col-12 col-md-6 calc__col">
        Net Profit
      </div>
      <div class="col-6 col-md-3 calc__col" id="netProfit">
        <strong>$284,580</strong>
      </div>
      <div class="col-6 col-md-3 calc__col" id="netProfitB">
        <strong>$697,700</strong>
      </div>
    </div> <!--End Row-->
  </div>
</div>

<script>
  let input = document.getElementById('initialGain');
      input.addEventListener('keyup', function(){
        let n = parseInt(this.value.replace(/\D/g,''),10);
        if( n > 3 ) { input.value = n.toLocaleString(); }
    }, false);
</script>