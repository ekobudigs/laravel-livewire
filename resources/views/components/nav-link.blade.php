     @props(['active' => false])

     @php
         $clases = $active ?? false ? 'nav-link active' : 'nav-link';
     @endphp
     <li class="nav-item">
         <a {{ $attributes->merge(['class' => $clases]) }}>
             {{ $slot }}
         </a>
     </li>
