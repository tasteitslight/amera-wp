<?php
/*

  Template Name: Dashboard Register

 */

get_header();
?>

<main role="main" class="bg-grey">
    
      <!-- Header -->
      <header class="header-secondary d-flex align-items-center justify-content-center">
        <div class="container text-center">
          <h1 class="pt-4">
            First Steps
          </h1>  
        </div>
        <svg class="svg-diagonal" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">
          <polygon fill="#f8f8f8" points="0,100 100,0 100,100" />
        </svg>
      </header>

      <!-- Articles  -->

      <section class="container pt-5 bg-grey">

        <form method="POST" action="https://americangroupre.activehosted.com/proc.php" id="_form_4_" class="_form _form_4 _inline-form  _dark" novalidate>
          <input type="hidden" name="u" value="4" />
          <input type="hidden" name="f" value="4" />
          <input type="hidden" name="s" />
          <input type="hidden" name="c" value="0" />
          <input type="hidden" name="m" value="0" />
          <input type="hidden" name="act" value="sub" />
          <input type="hidden" name="v" value="2" />
          <div class="_form-content">

            <div class="tab-content" id="pills-tabContent">
              <div class="tab-pane fade show active" id="pills-1" role="tabpanel" aria-labelledby="pills-1-tab">
                
                <label class="">
                  First Name
                </label>
                <input type="text" name="firstname" placeholder="Type your first name" />

                <label>
                  Last Name
                </label>
                <input type="text" name="lastname" placeholder="Type your first name" />

                <br/>

                <label class="_form-label">
                  Re-enter Email
                </label>
                <input type="text" name="email" placeholder="Type your email" required/>

                <br/>

                <label class="_form-label">
                  Have you recognized a capial gain within the past 180 days?
                </label>

                <p>

                  Opportunity Zone legislation requires invetors to roll over their eligible gain within 180 days of recognition in order to receive the greatest extent of tax incentives. Learn more about eligible gains <a href="/rules">here.</a>

                </p>

                <input id="field_4Yes" type="radio" name="field[4]" value="Yes"  >
                <span>
                  <label for="field_4Yes">
                    Yes
                </span>

                <br/>

                <input id="field_4No" type="radio" name="field[4]" value="No"  >
                <span>
                  <label for="field_4No">
                    No
                </span>

                <br/>


                <input id="field_4Unsure" type="radio" name="field[4]" value="Unsure"  >
                <span>
                  <label for="field_4Unsure">
                    Unsure
                </span> 

              </div>

              <div class="tab-pane fade" id="pills-2" role="tabpanel" aria-labelledby="pills-2-tab">
                <label class="_form-label">
                  Are you Accredited?
                </label>

                <p>

                  Generally, accreditation requires investors to meet certain financial requirements, which you can learn more about <a href="/glossary#a">here.</a>

                </p>

                <input id="field_6Yes" type="radio" name="field[6]" value="Yes"  >
                <span>
                  <label for="field_6Yes">
                    Yes
                </span>

                <br/>

                <input id="field_6No" type="radio" name="field[6]" value="No"  >
                <span>
                  <label for="field_6No">
                    No
                </span>

                <br/>

                <input id="field_6Unsure" type="radio" name="field[6]" value="Unsure"  >
                <span>
                  <label for="field_6Unsure">
                    Unsure
                </span>
              </div>

              <div class="tab-pane fade" id="pills-3" role="tabpanel" aria-labelledby="pills-3-tab">
                
                <label class="_form-label">
                  What is the approximate amount of the capital gain that you have recognized or intend to recognize?
                </label>
                
                <br/>

                <input id="field_5Less than $100,000" type="radio" name="field[5]" value="Less than $100,000"  >
                <span>
                  <label for="field_5Less than $100,000">
                    Less than $100,000
                </span>

                <br/>
                
                <input id="field_5$100,000-$250,000" type="radio" name="field[5]" value="$100,000-$250,000"  >
                <span>
                  <label for="field_5$100,000-$250,000">
                    $100,000-$250,000
                </span>
                
                <br/>

                <input id="field_5$250,000-$500,000" type="radio" name="field[5]" value="$250,000-$500,000"  >
                <span>
                  <label for="field_5$250,000-$500,000">
                    $250,000-$500,000
                </span>

                <br/>

                <input id="field_5$500,000-$1,000,000" type="radio" name="field[5]" value="$500,000-$1,000,000"  >
                <span>
                  <label for="field_5$500,000-$1,000,000">
                    $500,000-$1,000,000
                </span>

                <br/>

                <input id="field_5More than $1,000,000" type="radio" name="field[5]" value="More than $1,000,000"  >
                <span>
                  <label for="field_5More than $1,000,000">
                    More than $1,000,000
                </span>
              </div>

              <div class="tab-pane fade" id="pills-4" role="tabpanel" aria-labelledby="pills-4-tab">
                
                <label class="_form-label">
                  Which party would be investing the capital gain?
                </label>

                <p>
                  Investors should consult their CPA/tax professional to determine the most appropriate vehicle to use to invest. It may be necessary to maintain congruity between the entity or individual(s) that recognize the gain and that which is conducting the rollover, though individual circumstances may vary.
                </p>

                <input id="field_7Individual" type="radio" name="field[7]" value="Individual"  >
                <span>
                  <label for="field_7Individual">
                    Individual
                </span>

                <br/>

                <input id="field_7Joint" type="radio" name="field[7]" value="Joint"  >
                <span>
                  <label for="field_7Joint">
                    Joint
                </span>

                <br/>

                <input id="field_7Entity" type="radio" name="field[7]" value="Entity"  >
                <span>
                  <label for="field_7Entity">
                    Entity
                </span>

                <br/>

                <input id="field_7Unsure" type="radio" name="field[7]" value="Unsure"  >
                <span>
                  <label for="field_7Unsure">
                    Unsure
                </span>

                <br/>

                <button id="_form_4_submit" class="_submit" type="submit">
                  Submit
                </button>
                  
              </div>

            </div>

            <ul class="nav nav-pills mb-3 dashboard-reg" id="pills-tab" role="tablist">
              <li class="nav-item p-0 abcde">
                <a class="nav-link active" id="pills-1-tab" data-toggle="pill" href="#pills-1" role="tab" aria-controls="pills-1" aria-selected="true">Step 1</a>
              </li>
              <li class="nav-item p-0">
                <a class="nav-link" id="pills-2-tab" data-toggle="pill" href="#pills-2" role="tab" aria-controls="pills-2" aria-selected="false">Step 2</a>
              </li>
              <li class="nav-item p-0">
                <a class="nav-link" id="pills-3-tab" data-toggle="pill" href="#pills-3" role="tab" aria-controls="pills-3" aria-selected="false">Step 3</a>
              </li>
              <li class="nav-item p-0">
                <a class="nav-link" id="pills-4-tab" data-toggle="pill" href="#pills-4" role="tab" aria-controls="pills-4" aria-selected="false">Step 4</a>
              </li>
            </ul>

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
        
      </section>

      <!-- Need Help Section  -->

      <?php get_template_part('section', 'help'); ?>

    </main>

<?php
get_footer();
