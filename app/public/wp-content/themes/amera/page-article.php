<?php

/* 

Template Name: Article

*/

get_header();
?>

<main role="main">
    
      <!-- Header -->
      <header class="header-primary header-article d-flex align-items-center justify-content-center">
        <div class="container text-left">
          <h6>
            Category
          </h6>
          <h1>
            Article Title
          </h1>
          <h6>
            Author &amp; Date
          </h6> 
        </div>
        <svg class="svg-diagonal" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">
          <polygon fill="#ffffff" points="0,100 100,0 100,100" />
        </svg>
      </header>

      <!-- Intro  -->

      <section class="container position-relative my-5">  
        <div class="row">
          <div class="col-md-1 sidebar-sticky-2 text-center mt-2">
            <a class="d-inline-block footer-social footer-social-email my-1" href="#"></a>
            <a class="d-inline-block footer-social footer-social-twitter my-1" href="#"></a>
            <a class="d-inline-block footer-social footer-social-fb my-1 mb-3" href="#"></a>
          </div>
          <div class="col-12 col-md-8">

          <style>
 #_form_4_ { font-size:14px; line-height:1.6; font-family:arial, helvetica, sans-serif; margin:0; }
 #_form_4_ * { outline:0; }
 ._form_hide { display:none; visibility:hidden; }
 ._form_show { display:block; visibility:visible; }
 #_form_4_._form-top { top:0; }
 #_form_4_._form-bottom { bottom:0; }
 #_form_4_._form-left { left:0; }
 #_form_4_._form-right { right:0; }
 #_form_4_ input[type="text"],#_form_4_ input[type="date"],#_form_4_ textarea { padding:6px; height:auto; border:#979797 1px solid; border-radius:4px; color:#000 !important; font-size:13px; -webkit-box-sizing:border-box; -moz-box-sizing:border-box; box-sizing:border-box; }
 #_form_4_ textarea { resize:none; }
 #_form_4_ ._submit { -webkit-appearance:none; cursor:pointer; font-family:arial, sans-serif; font-size:14px; text-align:center; background:#333 !important; border:0 !important; -moz-border-radius:4px !important; -webkit-border-radius:4px !important; border-radius:4px !important; color:#fff !important; padding:10px !important; }
 #_form_4_ ._close-icon { cursor:pointer; background-image:url('https://d226aj4ao1t61q.cloudfront.net/esfkyjh1u_forms-close-dark.png'); background-repeat:no-repeat; background-size:14.2px 14.2px; position:absolute; display:block; top:11px; right:9px; overflow:hidden; width:16.2px; height:16.2px; }
 #_form_4_ ._close-icon:before { position:relative; }
 #_form_4_ ._form-body { margin-bottom:30px; }
 #_form_4_ ._form-image-left { width:150px; float:left; }
 #_form_4_ ._form-content-right { margin-left:164px; }
 #_form_4_ ._form-branding { color:#fff; font-size:10px; clear:both; text-align:left; margin-top:30px; font-weight:100; }
 #_form_4_ ._form-branding ._logo { display:block; width:130px; height:14px; margin-top:6px; background-image:url('https://d226aj4ao1t61q.cloudfront.net/hh9ujqgv5_aclogo_li.png'); background-size:130px auto; background-repeat:no-repeat; }
 #_form_4_ ._form-label,#_form_4_ ._form_element ._form-label { font-weight:bold; margin-bottom:5px; display:block; }
 #_form_4_._dark ._form-branding { color:#333; }
 #_form_4_._dark ._form-branding ._logo { background-image:url('https://d226aj4ao1t61q.cloudfront.net/jftq2c8s_aclogo_dk.png'); }
 #_form_4_ ._form_element { position:relative; margin-bottom:10px; font-size:0; max-width:100%; }
 #_form_4_ ._form_element * { font-size:14px; }
 #_form_4_ ._form_element._clear { clear:both; width:100%; float:none; }
 #_form_4_ ._form_element._clear:after { clear:left; }
 #_form_4_ ._form_element input[type="text"],#_form_4_ ._form_element input[type="date"],#_form_4_ ._form_element select,#_form_4_ ._form_element textarea:not(.g-recaptcha-response) { display:block; width:100%; -webkit-box-sizing:border-box; -moz-box-sizing:border-box; box-sizing:border-box; }
 #_form_4_ ._field-wrapper { position:relative; }
 #_form_4_ ._inline-style { float:left; }
 #_form_4_ ._inline-style input[type="text"] { width:150px; }
 #_form_4_ ._inline-style:not(._clear) + ._inline-style:not(._clear) { margin-left:20px; }
 #_form_4_ ._form_element img._form-image { max-width:100%; }
 #_form_4_ ._clear-element { clear:left; }
 #_form_4_ ._full_width { width:100%; }
 #_form_4_ ._form_full_field { display:block; width:100%; margin-bottom:10px; }
 #_form_4_ input[type="text"]._has_error,#_form_4_ textarea._has_error { border:#f37c7b 1px solid; }
 #_form_4_ input[type="checkbox"]._has_error { outline:#f37c7b 1px solid; }
 #_form_4_ ._error { display:block; position:absolute; font-size:13px; z-index:10000001; }
 #_form_4_ ._error._above { padding-bottom:4px; bottom:39px; right:0; }
 #_form_4_ ._error._below { padding-top:4px; top:100%; right:0; }
 #_form_4_ ._error._above ._error-arrow { bottom:0; right:15px; border-left:5px solid transparent; border-right:5px solid transparent; border-top:5px solid #f37c7b; }
 #_form_4_ ._error._below ._error-arrow { top:0; right:15px; border-left:5px solid transparent; border-right:5px solid transparent; border-bottom:5px solid #f37c7b; }
 #_form_4_ ._error-inner { padding:8px 12px; background-color:#f37c7b; font-size:13px; font-family:arial, sans-serif; color:#fff; text-align:center; text-decoration:none; -webkit-border-radius:4px; -moz-border-radius:4px; border-radius:4px; }
 #_form_4_ ._error-inner._form_error { margin-bottom:5px; text-align:left; }
 #_form_4_ ._button-wrapper ._error-inner._form_error { position:static; }
 #_form_4_ ._error-inner._no_arrow { margin-bottom:10px; }
 #_form_4_ ._error-arrow { position:absolute; width:0; height:0; }
 #_form_4_ ._error-html { margin-bottom:10px; }
 .pika-single { z-index:10000001 !important; }
 @media all and (min-width:320px) and (max-width:667px) { ::-webkit-scrollbar { display:none; }
 #_form_4_ { margin:0; width:100%; min-width:100%; max-width:100%; box-sizing:border-box; }
 #_form_4_ * { -webkit-box-sizing:border-box; -moz-box-sizing:border-box; box-sizing:border-box; font-size:1em; }
 #_form_4_ ._form-content { margin:0; width:100%; }
 #_form_4_ ._form-inner { display:block; min-width:100%; }
 #_form_4_ ._form-title,#_form_4_ ._inline-style { margin-top:0; margin-right:0; margin-left:0; }
 #_form_4_ ._form-title { font-size:1.2em; }
 #_form_4_ ._form_element { margin:0 0 20px; padding:0; width:100%; }
 #_form_4_ ._form-element,#_form_4_ ._inline-style,#_form_4_ input[type="text"],#_form_4_ label,#_form_4_ p,#_form_4_ textarea:not(.g-recaptcha-response) { float:none; display:block; width:100%; }
 #_form_4_ ._row._checkbox-radio label { display:inline; }
 #_form_4_ ._row,#_form_4_ p,#_form_4_ label { margin-bottom:0.7em; width:100%; }
 #_form_4_ ._row input[type="checkbox"],#_form_4_ ._row input[type="radio"] { margin:0 !important; vertical-align:middle !important; }
 #_form_4_ ._row input[type="checkbox"] + span label { display:inline; }
 #_form_4_ ._row span label { margin:0 !important; width:initial !important; vertical-align:middle !important; }
 #_form_4_ ._form-image { max-width:100%; height:auto !important; }
 #_form_4_ input[type="text"] { padding-left:10px; padding-right:10px; font-size:16px; line-height:1.3em; -webkit-appearance:none; }
 #_form_4_ input[type="radio"],#_form_4_ input[type="checkbox"] { display:inline-block; width:1.3em; height:1.3em; font-size:1em; margin:0 0.3em 0 0; vertical-align:baseline; }
 #_form_4_ button[type="submit"] { padding:20px; font-size:1.5em; }
 #_form_4_ ._inline-style { margin:20px 0 0 !important; }
 }
 #_form_4_ { position:relative; text-align:left; margin:25px auto 0; padding:20px; -webkit-box-sizing:border-box; -moz-box-sizing:border-box; box-sizing:border-box; *zoom:1; background:#fff !important; border:0px solid #b0b0b0 !important; width:500px; -moz-border-radius:0px !important; -webkit-border-radius:0px !important; border-radius:0px !important; color:#000 !important; }
 #_form_4_ ._form-title { font-size:22px; line-height:22px; font-weight:600; margin-bottom:0; }
 #_form_4_:before,#_form_4_:after { content:" "; display:table; }
 #_form_4_:after { clear:both; }
 #_form_4_._inline-style { width:auto; display:inline-block; }
 #_form_4_._inline-style input[type="text"],#_form_4_._inline-style input[type="date"] { padding:10px 12px; }
 #_form_4_._inline-style button._inline-style { position:relative; top:27px; }
 #_form_4_._inline-style p { margin:0; }
 #_form_4_._inline-style ._button-wrapper { position:relative; margin:27px 12.5px 0 20px; }
 #_form_4_ ._form-thank-you { position:relative; left:0; right:0; text-align:center; font-size:18px; }
 @media all and (min-width:320px) and (max-width:667px) { #_form_4_._inline-form._inline-style ._inline-style._button-wrapper { margin-top:20px !important; margin-left:0 !important; }
 }
</style>
<form method="POST" action="https://americangroupre.activehosted.com/proc.php" id="_form_4_" class="_form _form_4 _inline-form  _dark" novalidate>
  <input type="hidden" name="u" value="4" />
  <input type="hidden" name="f" value="4" />
  <input type="hidden" name="s" />
  <input type="hidden" name="c" value="0" />
  <input type="hidden" name="m" value="0" />
  <input type="hidden" name="act" value="sub" />
  <input type="hidden" name="v" value="2" />
  <div class="_form-content">
    <div class="_form_element _x16664899 _full_width _clear" >
      <div class="_form-title">
        Subscribe for Email Updates
      </div>
    </div>
    <div class="_form_element _x45137480 _full_width _clear" >
      <div class="_html-code">
        <p>
          Add a descriptive message telling what your visitor is signing up for here.
        </p>
      </div>
    </div>
    <div class="_form_element _x06047085 _full_width " >
      <label class="_form-label">
        Full Name
      </label>
      <div class="_field-wrapper">
        <input type="text" name="fullname" placeholder="Type your name" />
      </div>
    </div>
    <div class="_form_element _x07883064 _full_width " >
      <label class="_form-label">
        Email*
      </label>
      <div class="_field-wrapper">
        <input type="text" name="email" placeholder="Type your email" required/>
      </div>
    </div>
    <div class="_form_element _field6 _full_width " >
      <label class="_form-label">
        Accredited Investor
      </label>
      <div class="_row _checkbox-radio">
        <input id="field_6Yes" type="radio" name="field[6]" value="Yes"  >
        <span>
          <label for="field_6Yes">
            Yes
          </span>
        </div>
        <div class="_row _checkbox-radio">
          <input id="field_6No" type="radio" name="field[6]" value="No"  >
          <span>
            <label for="field_6No">
              No
            </span>
          </div>
          <div class="_row _checkbox-radio">
            <input id="field_6Unsure" type="radio" name="field[6]" value="Unsure"  >
            <span>
              <label for="field_6Unsure">
                Unsure
              </span>
            </div>
          </div>
          <div class="_form_element _field4 _full_width " >
            <label class="_form-label">
              Qualifying Capital Gains
            </label>
            <div class="_row _checkbox-radio">
              <input id="field_4Yes" type="radio" name="field[4]" value="Yes"  >
              <span>
                <label for="field_4Yes">
                  Yes
                </span>
              </div>
              <div class="_row _checkbox-radio">
                <input id="field_4No" type="radio" name="field[4]" value="No"  >
                <span>
                  <label for="field_4No">
                    No
                  </span>
                </div>
                <div class="_row _checkbox-radio">
                  <input id="field_4Unsure" type="radio" name="field[4]" value="Unsure"  >
                  <span>
                    <label for="field_4Unsure">
                      Unsure
                    </span>
                  </div>
                </div>
                <div class="_form_element _field5 _full_width " >
                  <label class="_form-label">
                    Capital Gains
                  </label>
                  <div class="_row _checkbox-radio">
                    <input id="field_5Less than $100,000" type="radio" name="field[5]" value="Less than $100,000"  >
                    <span>
                      <label for="field_5Less than $100,000">
                        Less than $100,000
                      </span>
                    </div>
                    <div class="_row _checkbox-radio">
                      <input id="field_5$100,000-$250,000" type="radio" name="field[5]" value="$100,000-$250,000"  >
                      <span>
                        <label for="field_5$100,000-$250,000">
                          $100,000-$250,000
                        </span>
                      </div>
                      <div class="_row _checkbox-radio">
                        <input id="field_5$250,000-$500,000" type="radio" name="field[5]" value="$250,000-$500,000"  >
                        <span>
                          <label for="field_5$250,000-$500,000">
                            $250,000-$500,000
                          </span>
                        </div>
                        <div class="_row _checkbox-radio">
                          <input id="field_5$500,000-$1,000,000" type="radio" name="field[5]" value="$500,000-$1,000,000"  >
                          <span>
                            <label for="field_5$500,000-$1,000,000">
                              $500,000-$1,000,000
                            </span>
                          </div>
                          <div class="_row _checkbox-radio">
                            <input id="field_5More than $1,000,000" type="radio" name="field[5]" value="More than $1,000,000"  >
                            <span>
                              <label for="field_5More than $1,000,000">
                                More than $1,000,000
                              </span>
                            </div>
                          </div>
                          <div class="_form_element _field7 _full_width " >
                            <label class="_form-label">
                              Investing Party
                            </label>
                            <div class="_row _checkbox-radio">
                              <input id="field_7Individual" type="radio" name="field[7]" value="Individual"  >
                              <span>
                                <label for="field_7Individual">
                                  Individual
                                </span>
                              </div>
                              <div class="_row _checkbox-radio">
                                <input id="field_7Joint" type="radio" name="field[7]" value="Joint"  >
                                <span>
                                  <label for="field_7Joint">
                                    Joint
                                  </span>
                                </div>
                                <div class="_row _checkbox-radio">
                                  <input id="field_7Entity" type="radio" name="field[7]" value="Entity"  >
                                  <span>
                                    <label for="field_7Entity">
                                      Entity
                                    </span>
                                  </div>
                                  <div class="_row _checkbox-radio">
                                    <input id="field_7Unsure" type="radio" name="field[7]" value="Unsure"  >
                                    <span>
                                      <label for="field_7Unsure">
                                        Unsure
                                      </span>
                                    </div>
                                  </div>
                                  <div class="_button-wrapper _full_width">
                                    <button id="_form_4_submit" class="_submit" type="submit">
                                      Submit
                                    </button>
                                  </div>
                                  <div class="_clear-element">
                                  </div>
                                </div>
                                <div class="_form-thank-you" style="display:none;">
                                </div>
                              </form>
                              
<script type="text/javascript">
window.cfields = {"6":"accredited_investor","4":"qualifying_capital_gains","5":"capital_gains","7":"investing_party"};
window._show_thank_you = function(id, message, trackcmp_url) {
  var form = document.getElementById('_form_' + id + '_'), thank_you = form.querySelector('._form-thank-you');
  form.querySelector('._form-content').style.display = 'none';
  thank_you.innerHTML = message;
  thank_you.style.display = 'block';
  if (typeof(trackcmp_url) != 'undefined' && trackcmp_url) {
    // Site tracking URL to use after inline form submission.
    _load_script(trackcmp_url);
  }
  if (typeof window._form_callback !== 'undefined') window._form_callback(id);
};
window._show_error = function(id, message, html) {
  var form = document.getElementById('_form_' + id + '_'), err = document.createElement('div'), button = form.querySelector('button'), old_error = form.querySelector('._form_error');
  if (old_error) old_error.parentNode.removeChild(old_error);
  err.innerHTML = message;
  err.className = '_error-inner _form_error _no_arrow';
  var wrapper = document.createElement('div');
  wrapper.className = '_form-inner';
  wrapper.appendChild(err);
  button.parentNode.insertBefore(wrapper, button);
  document.querySelector('[id^="_form"][id$="_submit"]').disabled = false;
  if (html) {
    var div = document.createElement('div');
    div.className = '_error-html';
    div.innerHTML = html;
    err.appendChild(div);
  }
};
window._load_script = function(url, callback) {
    var head = document.querySelector('head'), script = document.createElement('script'), r = false;
    script.type = 'text/javascript';
    script.charset = 'utf-8';
    script.src = url;
    if (callback) {
      script.onload = script.onreadystatechange = function() {
      if (!r && (!this.readyState || this.readyState == 'complete')) {
        r = true;
        callback();
        }
      };
    }
    head.appendChild(script);
};
(function() {
  if (window.location.search.search("excludeform") !== -1) return false;
  var getCookie = function(name) {
    var match = document.cookie.match(new RegExp('(^|; )' + name + '=([^;]+)'));
    return match ? match[2] : null;
  }
  var setCookie = function(name, value) {
    var now = new Date();
    var time = now.getTime();
    var expireTime = time + 1000 * 60 * 60 * 24 * 365;
    now.setTime(expireTime);
    document.cookie = name + '=' + value + '; expires=' + now + ';path=/';
  }
      var addEvent = function(element, event, func) {
    if (element.addEventListener) {
      element.addEventListener(event, func);
    } else {
      var oldFunc = element['on' + event];
      element['on' + event] = function() {
        oldFunc.apply(this, arguments);
        func.apply(this, arguments);
      };
    }
  }
  var _removed = false;
  var form_to_submit = document.getElementById('_form_4_');
  var allInputs = form_to_submit.querySelectorAll('input, select, textarea'), tooltips = [], submitted = false;

  var getUrlParam = function(name) {
    var regexStr = '[\?&]' + name + '=([^&#]*)';
    var results = new RegExp(regexStr, 'i').exec(window.location.href);
    return results != undefined ? decodeURIComponent(results[1]) : false;
  };

  for (var i = 0; i < allInputs.length; i++) {
    var regexStr = "field\\[(\\d+)\\]";
    var results = new RegExp(regexStr).exec(allInputs[i].name);
    if (results != undefined) {
      allInputs[i].dataset.name = window.cfields[results[1]];
    } else {
      allInputs[i].dataset.name = allInputs[i].name;
    }
    var fieldVal = getUrlParam(allInputs[i].dataset.name);

    if (fieldVal) {
      if (allInputs[i].type == "radio" || allInputs[i].type == "checkbox") {
        if (allInputs[i].value == fieldVal) {
          allInputs[i].checked = true;
        }
      } else {
        allInputs[i].value = fieldVal;
      }
    }
  }

  var remove_tooltips = function() {
    for (var i = 0; i < tooltips.length; i++) {
      tooltips[i].tip.parentNode.removeChild(tooltips[i].tip);
    }
      tooltips = [];
  };
  var remove_tooltip = function(elem) {
    for (var i = 0; i < tooltips.length; i++) {
      if (tooltips[i].elem === elem) {
        tooltips[i].tip.parentNode.removeChild(tooltips[i].tip);
        tooltips.splice(i, 1);
        return;
      }
    }
  };
  var create_tooltip = function(elem, text) {
    var tooltip = document.createElement('div'), arrow = document.createElement('div'), inner = document.createElement('div'), new_tooltip = {};
    if (elem.type != 'radio' && elem.type != 'checkbox') {
      tooltip.className = '_error';
      arrow.className = '_error-arrow';
      inner.className = '_error-inner';
      inner.innerHTML = text;
      tooltip.appendChild(arrow);
      tooltip.appendChild(inner);
      elem.parentNode.appendChild(tooltip);
    } else {
      tooltip.className = '_error-inner _no_arrow';
      tooltip.innerHTML = text;
      elem.parentNode.insertBefore(tooltip, elem);
      new_tooltip.no_arrow = true;
    }
    new_tooltip.tip = tooltip;
    new_tooltip.elem = elem;
    tooltips.push(new_tooltip);
    return new_tooltip;
  };
  var resize_tooltip = function(tooltip) {
    var rect = tooltip.elem.getBoundingClientRect();
    var doc = document.documentElement, scrollPosition = rect.top - ((window.pageYOffset || doc.scrollTop)  - (doc.clientTop || 0));
    if (scrollPosition < 40) {
      tooltip.tip.className = tooltip.tip.className.replace(/ ?(_above|_below) ?/g, '') + ' _below';
    } else {
      tooltip.tip.className = tooltip.tip.className.replace(/ ?(_above|_below) ?/g, '') + ' _above';
    }
  };
  var resize_tooltips = function() {
    if (_removed) return;
    for (var i = 0; i < tooltips.length; i++) {
      if (!tooltips[i].no_arrow) resize_tooltip(tooltips[i]);
    }
  };
  var validate_field = function(elem, remove) {
    var tooltip = null, value = elem.value, no_error = true;
    remove ? remove_tooltip(elem) : false;
    if (elem.type != 'checkbox') elem.className = elem.className.replace(/ ?_has_error ?/g, '');
    if (elem.getAttribute('required') !== null) {
      if (elem.type == 'radio' || (elem.type == 'checkbox' && /any/.test(elem.className))) {
        var elems = form_to_submit.elements[elem.name];
        if (!(elems instanceof NodeList || elems instanceof HTMLCollection) || elems.length <= 1) {
          no_error = elem.checked;
        }
        else {
          no_error = false;
          for (var i = 0; i < elems.length; i++) {
            if (elems[i].checked) no_error = true;
          }
        }
        if (!no_error) {
          tooltip = create_tooltip(elem, "Please select an option.");
        }
      } else if (elem.type =='checkbox') {
        var elems = form_to_submit.elements[elem.name], found = false, err = [];
        no_error = true;
        for (var i = 0; i < elems.length; i++) {
          if (elems[i].getAttribute('required') === null) continue;
          if (!found && elems[i] !== elem) return true;
          found = true;
          elems[i].className = elems[i].className.replace(/ ?_has_error ?/g, '');
          if (!elems[i].checked) {
            no_error = false;
            elems[i].className = elems[i].className + ' _has_error';
            err.push("Checking %s is required".replace("%s", elems[i].value));
          }
        }
        if (!no_error) {
          tooltip = create_tooltip(elem, err.join('<br/>'));
        }
      } else if (elem.tagName == 'SELECT') {
        var selected = true;
        if (elem.multiple) {
          selected = false;
          for (var i = 0; i < elem.options.length; i++) {
            if (elem.options[i].selected) {
              selected = true;
              break;
            }
          }
        } else {
          for (var i = 0; i < elem.options.length; i++) {
            if (elem.options[i].selected && !elem.options[i].value) {
              selected = false;
            }
          }
        }
        if (!selected) {
          elem.className = elem.className + ' _has_error';
          no_error = false;
          tooltip = create_tooltip(elem, "Please select an option.");
        }
      } else if (value === undefined || value === null || value === '') {
        elem.className = elem.className + ' _has_error';
        no_error = false;
        tooltip = create_tooltip(elem, "This field is required.");
      }
    }
    if (no_error && elem.name == 'email') {
      if (!value.match(/^[\+_a-z0-9-'&=]+(\.[\+_a-z0-9-']+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i)) {
        elem.className = elem.className + ' _has_error';
        no_error = false;
        tooltip = create_tooltip(elem, "Enter a valid email address.");
      }
    }
    if (no_error && /date_field/.test(elem.className)) {
      if (!value.match(/^\d\d\d\d-\d\d-\d\d$/)) {
        elem.className = elem.className + ' _has_error';
        no_error = false;
        tooltip = create_tooltip(elem, "Enter a valid date.");
      }
    }
    tooltip ? resize_tooltip(tooltip) : false;
    return no_error;
  };
  var needs_validate = function(el) {
    return el.name == 'email' || el.getAttribute('required') !== null;
  };
  var validate_form = function(e) {
    var err = form_to_submit.querySelector('._form_error'), no_error = true;
    if (!submitted) {
      submitted = true;
      for (var i = 0, len = allInputs.length; i < len; i++) {
        var input = allInputs[i];
        if (needs_validate(input)) {
          if (input.type == 'text') {
            addEvent(input, 'blur', function() {
              this.value = this.value.trim();
              validate_field(this, true);
            });
            addEvent(input, 'input', function() {
              validate_field(this, true);
            });
          } else if (input.type == 'radio' || input.type == 'checkbox') {
            (function(el) {
              var radios = form_to_submit.elements[el.name];
              for (var i = 0; i < radios.length; i++) {
                addEvent(radios[i], 'click', function() {
                  validate_field(el, true);
                });
              }
            })(input);
          } else if (input.tagName == 'SELECT') {
            addEvent(input, 'change', function() {
              validate_field(this, true);
            });
          } else if (input.type == 'textarea'){
            addEvent(input, 'input', function() {
              validate_field(this, true);
            });
          }
        }
      }
    }
    remove_tooltips();
    for (var i = 0, len = allInputs.length; i < len; i++) {
      var elem = allInputs[i];
      if (needs_validate(elem)) {
        if (elem.tagName.toLowerCase() !== "select") {
          elem.value = elem.value.trim();
        }
        validate_field(elem) ? true : no_error = false;
      }
    }
    if (!no_error && e) {
      e.preventDefault();
    }
    resize_tooltips();
    return no_error;
  };
  addEvent(window, 'resize', resize_tooltips);
  addEvent(window, 'scroll', resize_tooltips);
  window._old_serialize = null;
  if (typeof serialize !== 'undefined') window._old_serialize = window.serialize;
  _load_script("//d3rxaij56vjege.cloudfront.net/form-serialize/0.3/serialize.min.js", function() {
    window._form_serialize = window.serialize;
    if (window._old_serialize) window.serialize = window._old_serialize;
  });
  var form_submit = function(e) {
    e.preventDefault();
    if (validate_form()) {
      // use this trick to get the submit button & disable it using plain javascript
      document.querySelector('#_form_4_submit').disabled = true;
            var serialized = _form_serialize(document.getElementById('_form_4_'));
      var err = form_to_submit.querySelector('._form_error');
      err ? err.parentNode.removeChild(err) : false;
      _load_script('https://americangroupre.activehosted.com/proc.php?' + serialized + '&jsonp=true');
    }
    return false;
  };
  addEvent(form_to_submit, 'submit', form_submit);
})();

</script>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus pretium posuere dictum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla elit ligula, lacinia congue molestie vitae, maximus et ante. Praesent diam ligula, mollis at congue sit amet, vulputate ultrices nisl. Pellentesque varius metus luctus tellus lacinia porta. Cras maximus pellentesque sapien, eget tempus ligula porttitor ac. Fusce sagittis elit erat, at molestie nulla venenatis vitae. Donec vitae leo mauris. Mauris ultrices, sapien dapibus dapibus placerat, mauris tellus dignissim nisi, in ornare nisi risus non lorem. Ut rhoncus libero non elit consectetur tempor. Suspendisse potenti. Mauris sit amet erat magna. Nullam sit amet turpis dictum, blandit dolor eu, porta dolor. Quisque sagittis feugiat porttitor. Vivamus in neque et nisi egestas elementum. Proin fringilla varius neque vitae varius.

              Cras ex nisl, bibendum consectetur porta vitae, facilisis non sapien. Vivamus sollicitudin ultrices mi eu bibendum. Praesent leo est, aliquam eu luctus in, faucibus non turpis. Integer pharetra erat quis metus sodales, in feugiat ipsum pulvinar. Ut sem leo, accumsan non finibus nec, pharetra et quam. Duis eu ultricies ligula, a varius tortor. Phasellus ac ipsum sed risus interdum iaculis. Nunc et consectetur dolor, eget mattis sem. Integer dignissim nibh in sem aliquam, et eleifend nisi efficitur. Aliquam elementum feugiat ipsum, nec porttitor dolor porta id. Aliquam erat volutpat. Pellentesque elementum pharetra est, in pretium arcu. Pellentesque lacinia tristique dolor eget pulvinar. Fusce porttitor cursus pulvinar.
              
              Duis lacinia lectus eu imperdiet faucibus. Nunc nec metus lectus. Duis vehicula vitae magna at porttitor. Suspendisse lacinia feugiat gravida. Sed imperdiet pretium accumsan. Integer ut enim in elit viverra tristique ut et lacus. Suspendisse potenti. Nullam iaculis elit nulla, ac mattis enim iaculis ut. Duis ut magna accumsan, lacinia metus at, tristique dolor.
              
              Curabitur vulputate sagittis urna vel molestie. Aenean eu vehicula nulla. Quisque fringilla vitae magna luctus convallis. Duis venenatis orci non turpis maximus, id congue orci tempus. Nulla vel ipsum et libero rhoncus ultricies euismod et purus. Maecenas congue ex quis ex fermentum accumsan. Vivamus neque mauris, pretium at pellentesque ut, semper a ex. In hac habitasse platea dictumst. Donec ullamcorper leo vitae dictum rhoncus. Vestibulum at lectus neque.
              
              Nulla sagittis turpis vel commodo auctor. Vivamus in metus eu eros auctor cursus. Maecenas aliquet pharetra nunc ac rhoncus. Sed ipsum nulla, malesuada eget libero et, tincidunt cursus augue. Pellentesque pretium nunc non hendrerit sollicitudin. Nam egestas lectus sit amet erat commodo, ut condimentum purus ullamcorper. Etiam bibendum tincidunt elit, vitae imperdiet ante commodo sed. Vestibulum cursus ante quam, id commodo purus hendrerit at. Ut vestibulum risus vel placerat cursus. Praesent pellentesque aliquet ligula in ullamcorper.
            </p>
          </div>
          <div class="col-12 col-sm-6 col-md-3 article-sidebar sidebar-sticky-2 mb-2">
            <div class="">
              <h5 class="">
                Related
              </h5>
              <div class="separator-gradient mb-3"></div>
              <div class="article-sidebar--article pb-2">
                <img src="<?php bloginfo('template_directory'); ?>/assets/img/resources/1.jpg" class="border-radius box-shadow" />
                <h6 class="pt-2">
                  Article Name
                </h6>
              </div>
              <div class="article-sidebar--article">
                <img src="<?php bloginfo('template_directory'); ?>/assets/img/resources/2.jpg" class="border-radius box-shadow" />
                <h6 class="pt-2">
                  Article Name
                </h6>
              </div>
              <div class="article-sidebar--article">
                <img src="<?php bloginfo('template_directory'); ?>/assets/img/resources/3.jpg" class="border-radius box-shadow" />
                <h6 class="pt-2">
                  Article Name
                </h6>
              </div>
            </div>
          </div>
        </div> 
      </section>

      <!-- View Investments Section -->

      <?php get_template_part('section', 'viewInvestments'); ?>

      <!-- Need Help Section  -->

      <?php get_template_part('section', 'help'); ?>

    </main>

<?php 
get_footer();