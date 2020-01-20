@extends('voyager::master')

@section('page_title', __('voyager::generic.view').' '.$dataType->display_name_singular)

@section('page_header')

    @include('layouts.assets')

    <!-- @include('voyager::multilingual.language-selector') -->
@stop

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <td rowspan="2">N
                            п/п
                        </td>
                        <td rowspan="2">Наименова-
                            ние СКЗИ,
                            эксплуата-
                            ционной и
                            техничес-
                            кой доку-
                            ментации к
                            ним, клю-
                            чевых до-
                            кументов
                        </td>
                        <td rowspan="2">Серийные
                            номера
                            СКЗИ,
                            эксплуата-
                            ционной и
                            техничес-
                            кой доку-
                            ментации к
                            ним, номе-
                            ра серий
                            ключевых
                            документов
                        </td>
                        <td rowspan="2">Номера эк-
                            земпляров
                            (криптог-
                            рафические
                            номера)
                            ключевых
                            документов
                        </td>
                        <td colspan="2">Отметка о получении</td>
                        <td colspan="3">Отметка о рассылке
                            (передаче)
                        </td>
                        <td colspan="2">Отметка
                            о возврате
                        </td>
                        <td rowspan="2">Дата
                            ввода
                            в дей-
                            ствие
                        </td>
                        <td rowspan="2">Дата
                            вывода
                            из
                            дейст-
                            вия
                        </td>
                        <td colspan="2"> Отметка об уничтожении
                            СКЗИ, ключевых документов
                        </td>
                        <td rowspan="2">Приме-
                            чание
                        </td>
                    </tr>
                    <tr>
                        <td>От кого
                            получены
                            или Ф.И.О.
                            сотрудника
                            органа
                            криптогра-
                            фической
                            защиты,
                            изготовив-
                            шего клю-
                            чевые
                            документы
                        </td>
                        <td>Дата и
                            номер
                            сопрово-
                            дитель-
                            ного
                            письма
                            или дата
                            изготов-
                            ления
                            ключевых
                            докумен-
                            тов и
                            расписка
                            в изго-
                            товлении
                        </td>
                        <td>Кому
                            разос-
                            ланы
                            (пере-
                            даны)
                        </td>
                        <td>Дата и
                            номер
                            сопро-
                            води-
                            тель-
                            ного
                            письма
                        </td>
                        <td>Дата и
                            номер
                            подтвер-
                            ждения
                            или рас-
                            писка в
                            получе-
                            нии
                        </td>
                        <td>Дата и
                            номер
                            сопрово-
                            дитель-
                            ного
                            письма
                        </td>
                        <td>Дата и
                            номер
                            подтвер-
                            ждения
                        </td>
                        <td>Дата унич-
                            тожения
                        </td>
                        <td>Номер акта
                            или расписка
                            об уничтожении
                        </td>
                    </tr>
                    <tr class="text-center">
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                        <td>5</td>
                        <td>6</td>
                        <td>7</td>
                        <td>8</td>
                        <td>9</td>
                        <td>10</td>
                        <td>11</td>
                        <td>12</td>
                        <td>13</td>
                        <td>14</td>
                        <td>15</td>
                        <td>16</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($devices as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->serial_number }}</td>
                            <td>{{ $item->manufacturer }}</td>
                            <td>{{ $item->inventory_number }}</td>
                            <td>{{ $item->person_admin['last_name'] }}</td>
                            <td>{{ $item->act_vvoda }}</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>{{ \Carbon\Carbon::parse($item->started_at)->format('d.m.Y') }}</td>
                            <td>{{ $item->destruction['destroyed_at'] }}</td>
                            <td>{{ $item->destruction['destroyed_at'] }}</td>
                            <td>{{ $item->destruction['act_number'] }}</td>
                            <td>{{ $item->comment }}</td>
                        </tr>
                    @endforeach

                    @foreach ($transfers as $item)
                        <tr>
                            <td>{{ $item->device['id'] }}</td>
                            <td>{{ $item->device['serial_number'] }}</td>
                            <td>{{ $item->device['manufacturer'] }}</td>
                            <td>{{ $item->device['inventory_number'] }}</td>
                            <td>{{ $item->device['person_admin']['last_name'] }}</td>
                            <td>{{ $item->device['act_vvoda'] }}</td>
                            <td>{{ $item->send_to }}</td>
                            <td>{{ $item->send_letter }}</td>
                            <td>{{ $item->send_confirmation }}</td>
                            <td>{{ $item->return_letter }}</td>
                            <td>{{ $item->return_confirmation }}</td>
                            <td>{{ $item->device->started_at ?? '' }}</td>
                            <td>{{ $item->device->destruction->destroyed_at ?? '' }}</td>
                            <td>{{ $item->device->destruction['destroyed_at'] }}</td>
                            <td>{{ $item->device->destruction['act_number'] }}</td>
                            <td>{{ $item->device['comment'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection