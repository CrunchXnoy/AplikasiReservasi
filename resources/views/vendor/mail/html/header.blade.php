<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="https://www.upload.ee/image/14245863/logo4.png" class="logo" alt="Sandra Kuliner Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
