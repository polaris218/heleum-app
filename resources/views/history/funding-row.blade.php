<tr>
    <td>
        <div>@lang('Funding')</div>
    </td>

    <td>
        <div>
            <span><small class="mobile-only">@lang('From') </small>{{ $txn->source_currency }} @lang('Card')</span>
        </div>
    </td>

    <td>
        <div>
            <span>{{ $txn->timestamp->format('d M Y') }}</span>
        </div>
    </td>

    <td>
        <div>
            @inject('currencyService', 'App\Services\CurrencyService')
            <span class="deposit">+<em class="currency-mark">{{ $currencyService::convertCurrencyToMark($txn->source_currency) }}</em>{{ number_format($txn->amount, 2) }}</span>
        </div>
    </td>
</tr>
