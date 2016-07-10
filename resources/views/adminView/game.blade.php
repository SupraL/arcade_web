<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ secure_asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('css/mdb.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('css/custom_style.css') }}">
    <script src="{{ secure_asset('js/jquery.min.js')}}"></script>
    <script src="{{ secure_asset('js/bootstrap.min.js')}}"></script>
    <script src="{{ secure_asset('js/mdb.js')}}"></script>
    <meta charset="UTF-8">
    <title>ArcadeCrafts</title>
    <script>
        $(document).ready(function () {
            $('select').material_select();
        });
    </script>
</head>
<body>
@extends('adminView/header')
<div class="verticalContainer">
    <h4 class="h4-responsive">遊戲管理</h4>
    <hr/>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addGameModal">新增遊戲</button>
    <table class="table">
        <thead>
        <tr>
            <th>#</th>
            <th>遊戲名稱</th>
            <th>現時版本</th>
            <th>下載連接</th>
        </tr>
        </thead>
        <tbody>
        @foreach($gameList as $game)
            <tr>
                <th scope="row">{{$game->gameID}}</th>
                <td><span class="label {{$game->gameColor}} label-pill">{{$game->gameName}}</span></td>
                <td>{{$game->currentVersion}}</td>
                <td>{{$game->downloadLink}}</td>
                <td style="width:20%">
                    <div class="row">
                        <div class="col-md-6">
                            <button type="button" class="btn btn-default btn-sm btn-block btnEdit" data-toggle="modal" data-target="#editGameModal" data-gamecolor="{{$game->gameColor}}" data-gameid="{{$game->gameID}}" data-gameVer="{{$game->currentVersion}}" data-downloadLink="{{$game->downloadLink}}" data-gamename="{{$game->gameName}}">編輯</button>
                        </div>
                        <div class="col-md-6">
                            <button type="button" class="btn btn-warning btn-sm btn-block" data-toggle="modal" data-target="#myModal">刪除</button>
                        </div>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
<div class="modal fade" id="editGameModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">編輯遊戲</h4>
            </div>
            <form action="./game" method="POST">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-field" style="margin-top:0px">
                                <input id="edit_gameName" name="edit_gameName" type="text" class="validate">
                                <label for="icon_prefix">遊戲名稱</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-field" style="margin-top:0px">
                                <input id="edit_color" name="edit_color" type="text" class="validate">
                                <label for="icon_prefix">顏色</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-field" style="margin-top:0px">
                                <input id="edit_gameVersion" name="edit_gameVersion" type="text" class="validate">
                                <label for="icon_prefix">現時版本</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-field" style="margin-top:0px">
                                <input id="edit_download" name="edit_download" type="text" class="validate">
                                <label for="icon_prefix">下載連接</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn cancelButton" data-dismiss="modal">關閉</button>
                    <button type="submit" class="btn indexButton" style="margin:0px">儲存</button>
                </div>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="edit_gameID" id="edit_gameID"/>
                <input type="hidden" name="type" value="edit"/>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="addGameModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">新增遊戲</h4>
            </div>
            <form action="./game" method="POST">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-field" style="margin-top:0px">
                                <input id="add_gameName" name="add_gameName" type="text" class="validate">
                                <label for="icon_prefix">遊戲名稱</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-field" style="margin-top:0px">
                                <input id="add_gameVersion" name="add_gameVersion" type="text" class="validate">
                                <label for="icon_prefix">現時版本</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-field" style="margin-top:0px">
                                <input id="add_download" name="add_download" type="text" class="validate">
                                <label for="icon_prefix">下載連接</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn cancelButton" data-dismiss="modal">關閉</button>
                    <button type="submit" class="btn indexButton" style="margin:0px">儲存</button>
                </div>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="add_gameID" id="add_gameID"/>
                <input type="hidden" name="type" value="add"/>
            </form>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        $('#editGameModal').on('shown.bs.modal', function (e) {
            var srcButton = $(e.relatedTarget);
            $("#edit_gameID").val(srcButton.data('gameid'));
            $("#edit_gameName").val(srcButton.data('gamename'));
            $("#edit_gameVersion").val(srcButton.data('gamever'));
            $("#edit_download").val(srcButton.data('downloadlink'));
            $("#edit_color").val(srcButton.data('gamecolor'));
            $("#edit_color").focus();
            $("#edit_download").focus();
            $("#edit_gameVersion").focus();
            $("#edit_gameName").focus();
        });
    });
</script>
</body>
</html>