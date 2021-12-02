<!-- Two Columns -->
<table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tbody>
        <tr>
            <td class="pb-10" style="padding-bottom: 10px;">
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tbody>
                        <tr>
                            <th class="column-top brr-15" width="320" bgcolor="#ffffff"
                                style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top; border-radius:15px;">
                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                    <tbody>
                                        <tr>
                                            <td class="p-10" style="padding: 10px 10px 10px 10px;">
                                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <table width="100%" border="0" cellspacing="0"
                                                                    cellpadding="0">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td class="p-20"
                                                                                style="padding: 20px 20px 20px 20px;">
                                                                                <table width="100%" border="0"
                                                                                    cellspacing="0" cellpadding="0">
                                                                                    <tbody>

                                                                                        <tr>

                                                                                            <td class="text-16 pb-25"
                                                                                                style="color:#666666; font-family:Arial, sans-serif; font-size:16px; line-height:30px; text-align:left; min-width:auto !important; padding-bottom: 25px;">
                                                                                                Congratulations your
                                                                                                portfolio has
                                                                                                @if ($productionType ==
                                                                                                0)
                                                                                                <span
                                                                                                    style="color:#15a515;">Gain</span>
                                                                                                @else
                                                                                                <span
                                                                                                    style="color:#FF0000;">Loss</span>
                                                                                                @endif
                                                                                                with the
                                                                                                following information:
                                                                                                <br>
                                                                                                Portfolio title:
                                                                                                {{$strategyPortfolio->portfolio->title}}
                                                                                                <br>
                                                                                                Portfolio current
                                                                                                amount:
                                                                                                ${{ $strategyPortfolio->portfolio->amount }}
                                                                                                <br>
                                                                                                @if ($productionType==0)
                                                                                                Performance Fee:
                                                                                                ${{ $performance['pFee'] }}
                                                                                                <br>
                                                                                                Take Profit:
                                                                                                ${{ $performance['takeProfit'] }}
                                                                                                <br>
                                                                                                @endif
                                                                                                {{$productionType == 0?'Gain':'Loss'}}:
                                                                                                ${{ $performance['netGain'] }}
                                                                                                <br>

                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="text-16 pb-25"
                                                                                                style="color:#666666;
                                                                                                font-family:Arial,
                                                                                                sans-serif;
                                                                                                font-size:16px;
                                                                                                line-height:30px;
                                                                                                text-align:left;
                                                                                                min-width:auto
                                                                                                !important;
                                                                                                padding-bottom: 25px;">
                                                                                                See you at The Arg!
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="text-16 pb-25"
                                                                                                style="color:#666666;
                                                                                                font-family:Arial,
                                                                                                sans-serif;
                                                                                                font-size:16px;
                                                                                                line-height:30px;
                                                                                                text-align:left;
                                                                                                min-width:auto
                                                                                                !important;
                                                                                                padding-bottom: 25px;">
                                                                                                -The Arg App Team
                                                                                            </td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </th>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
    </tbody>
</table>
<!-- END Two Columns -->
