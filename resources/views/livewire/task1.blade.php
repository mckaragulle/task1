<div>
    <div class="table">
        <table class="table">
            <thead>
                <tr>
                    <th></th>
                    @for ($j = 0; $j < 51; $j++)
                        <th>
                            <label>{{ $j + 1 }}. Week Total:</label>

                        </th>
                    @endfor
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @for ($i = 0; $i < 9; $i++)
                    <tr>
                        <td>{{ $i + 1 }}. Person</td>
                        @for ($j = 0; $j < 51; $j++)
                            <td>
                                <input type="number" wire:model.lazy="rows.{{ $i }}.{{ $j }}" />
                            </td>
                        @endfor
                        <td>{{ $totalPerson[$i] ?? 0 }}</td>
                    </tr>
                @endfor
            </tbody>
            <tfoot>
                <tr>
                    <td></td>
                    @for ($j = 0; $j < 51; $j++)
                        <td>
                            <label>{{ $j + 1 }}. Week Total: </label>
                            {{ $totalWeek[$j] ?? 0 }}
                        </td>
                    @endfor
                    <td></td>
                </tr>
            </tfoot>
        </table>
    </div>
</div>
