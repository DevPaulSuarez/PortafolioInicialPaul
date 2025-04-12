@php
    $currentLocale = app()->getLocale();
    $urlEn = route('lang.switch', 'en');
    $urlEs = route('lang.switch', 'es');
@endphp


<li class="nav-item" style="margin-top: 13px;">
  <div class="form-check form-switch form-switch-xl d-flex align-items-center">
    <input class="form-check-input" type="checkbox" id="flexSwitchLang"
           onchange="window.location.href = this.checked ? '{{ $urlEn }}' : '{{ $urlEs }}'"
           {{ app()->getLocale() == 'en' ? 'checked' : '' }}>
    <img src="{{ asset('assets/img/flags/' . app()->getLocale() . '.png') }}" alt="flag" width="35" height="35" class="me-2" style="margin-left: 8px;">
  </div>
</li>

