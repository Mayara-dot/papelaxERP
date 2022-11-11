@extends('components/layout')
@section('aside')
<table>
    <tr>
        <th style="width: 150px">MESA</th>
        <th colspan="4">GARÇOM</th>
    </tr>
    <tr>
        <td><input type="text" name="" id=""></td>
        <td colspan="4"><select>
        <option value="ANA">ANA</option>
        <option value="MAYARA">MAYARA</option>
        <option value="SAMIA">SAMIA</option>
        <option value="JESSICA">JÉSSICA</option>
        </select></td>
    </tr>
    <tr>
        <th>QTD</th>
        <th colspan="4">CÓDIGO</th>
    </tr>
    <tr>
        <td><input type="text" name="" id=""></td>
        <td colspan="4"><input type="text" name="" id=""></td>
    </tr>
    <tr>
        <td><input type="button" value="7"></td>
        <td colspan="3"><input type="button" value="8"></td>
        <td colspan="3"><input type="button" value="9"></td>
    </tr>
    <tr>
        <td><input type="button" value="4"></td>
        <td colspan="3"><input type="button" value="5"></td>
        <td colspan="3"><input type="button" value="6"></td>
    </tr>
    <tr>
        <td><input type="button" value="1"></td>
        <td colspan="3"><input type="button" value="2"></td>
        <td colspan="3"><input type="button" value="3"></td>
    </tr>
    <tr>
        <td><input type="button" value="LIMPAR"></td>
        <td colspan="3"><input type="button" value="0"></td>
        <td colspan="3"><input type="button" value=","></td>
    </tr>
    <tr>
        <td><input type="button" value="PGTO"></td>
        <td colspan="4"><input type="button" value="ENTER"></td>
    </tr>
    <tr>
        <th>DESCRIÇÃO</th>
        <th>QTDE</th>
        <th colspan="2">PREÇO</th>
        <th>SUB TOTAL</th>
    </tr>
    <tr>
        <td colspan="5">
            <div class="form-floating">
                <textarea class="form-control" 
                readonly id="textarea" style="height: 310px">
                </textarea>
            </div>
        </td>
    </tr>
    <tr>
        <td colspan="2">Total</td>
        <td colspan="3">0.00</td>
    </tr>
</table>
@endsection