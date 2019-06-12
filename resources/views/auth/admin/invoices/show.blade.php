@extends('layouts.auth.app')
<table>
    @foreach($invoices as $invoice)
    <tr>
        <td>
            {{ $invoice->id }}
        </td>
        <td>
            {{ $invoice->total() }}
        </td>
    </tr>
    @endforeach
</table>