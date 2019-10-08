function currency (a) {
  return Number(a.toFixed(0)).toLocaleString();
}

function gid (a) {
  return document.getElementById(a);
}

function calculateS () {

  let initialGain = Number(document.getElementById('initialGain').value.replace(/\D/g,''));
  let capGain = document.getElementsByClassName('capGain');
  let capGain__neg = document.getElementsByClassName('capGain__neg');
  let calc__table = document.getElementsByClassName('calc__table');
  let calc__td = calc__table[0].getElementsByTagName('td');

  let initialFedTaxS = initialGain * .408;
  let capAvailS = initialGain - initialFedTaxS;
  let newValueS = capAvailS * (1+ .09 * 10);
  let newValueBS = initialGain * (1+ .09 * 10);
  let tax85S = initialFedTaxS * .85
  let tax2029S = (newValueS - capAvailS) * .238;
  let afterTaxS = newValueS - tax2029S;
  let afterTaxBS = newValueBS - tax85S;
  let netProfitS = afterTaxS - initialGain;
  let netProfitBS = afterTaxBS - initialGain;

  // Capital Gain - $ Global

  for (let i=0; i<capGain.length; i++) {
    capGain[i].innerHTML = "$" +  currency(initialGain);
  }
  
  // Top Federal Tax Paid on Original Capital Gain, 23.8%

  gid('initialFedTaxS').innerHTML = "(" + currency(initialFedTaxS) + ")";
  
  // Capital Available for a "New Investment" in 2019

  document.getElementById('capAvailS').innerHTML = "$" + currency(capAvailS);

  // Value of New Investment After 10 Years

  gid('newValueS').innerHTML = "$" + currency(newValueS);
  gid('newValueBS').innerHTML = "$" + currency(newValueBS);

  // Top Federal Tax on 85% of Original Gain due Dec 31, 2026

  gid('tax85S').innerHTML = "(" + currency(tax85S) + ")";

  // Top Federal Tax on Disposition of New Investment in 2029

  gid('tax2029S').innerHTML = "(" + currency(tax2029S) + ")";

  // After Tax Proceeds

  gid('afterTaxS').innerHTML = "$" + currency(afterTaxS);
  gid('afterTaxBS').innerHTML = "$" + currency(afterTaxBS);

  // Less: Original Gain

  for (let i=0; i<capGain__neg.length; i++) {
    capGain__neg[i].innerHTML = "(" + currency(initialGain) + ")";
  }

  // Net Profit

  gid('netProfitS').innerHTML = "$" + currency(netProfitS);
  gid('netProfitBS').innerHTML = "$" + currency(netProfitBS);

  for (let i=0; i < calc__td.length; i++) {
    calc__td[i].style.color = '#000000';
  }

}

function updateCalc() {

  setTimeout(calculateS, 500)
  return false;

}
