
    <div class="list-group">
        <table class="table table-bordered" id="radio">

            <form>

                @include('surveys._tableScale')


                @foreach( $questions as $question)

                    <tr>

                        <td class="list-group-item clearfix col-md-6">
                            <h4><em>{{ $question['group']->name }}</em></h4>
                        </td>

                    </tr>

                    @foreach( $question['questions'] as $groupedQuestion )

                        <tr>
                            <td class="list-group-item clearfix col-md-6">
                                <label> {{ $groupedQuestion->indicator }}</label>
                            </td>
                            <td class="col-md-1">
                                <input type="radio"
                                       value="0"
                                       name="radio[{{ $groupedQuestion->id }}]"
                                       required>
                            </td>
                            <td class="col-md-1">
                                <input type="radio"
                                       value="1"
                                       name="radio[{{ $groupedQuestion->id }}]"
                                       required>
                            </td>
                            <td class="col-md-1">
                                <input type="radio"
                                       value="2"
                                       name="radio[{{ $groupedQuestion->id }}]"
                                       required>
                            </td>
                            <td class="col-md-1">
                                <input type="radio"
                                       value="3"
                                       name="radio[{{ $groupedQuestion->id }}]"
                                       required>
                            </td>
                            <td class="col-md-1">
                                <input type="radio"
                                       value="4"
                                       name="radio[{{ $groupedQuestion->id }}]"
                                       required>
                            </td>
                            <td class="col-md-1">
                                <input type="radio"
                                       value="5"
                                       name="radio[{{ $groupedQuestion->id }}]"
                                       required>
                            </td>
                        </tr>


                    @endforeach


                    @endforeach

            </form>
        </table>
    </div>

