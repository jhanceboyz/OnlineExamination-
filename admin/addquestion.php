
<?php
include "header.php";
?>

<!-- Add Form -->
<div class="grid-form">
    <div class="grid-form1">
        <div class="alert alert-dismissible alert-success">
            <strong>Add Question in Quiz</strong>
        </div>
        <div class="tab-content row-fluid">
            <form class="form-horizontal" id="frmTasks" action="addquestioncode.php" method="post">

                <div class="form-group">
                    <label for="StartDate" class="col-sm-2 control-label">Category</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="category" id="category">
                            <option value="0">Select Category</option>
                            <option value="1">General English</option>
                            <option value="2">General Aptitude</option>
                            <option value="3">General Reasoning</option>
                            <option value="4">Computer Science</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="StartDate" class="col-sm-2 control-label">Question</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="question" name="question" data-rule-required="true">
                        </textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label for="StartDate" class="col-sm-2 control-label">Option 1</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="option1" name="option1" data-rule-required="true">
                        </textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label for="StartDate" class="col-sm-2 control-label">Option 2</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="option2" name="option2" data-rule-required="true">
                        </textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label for="StartDate" class="col-sm-2 control-label">Option 3</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="option3" name="option3" data-rule-required="true">
                        </textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label for="StartDate" class="col-sm-2 control-label">Option 4</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="option4" name="option4" data-rule-required="true">
                        </textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label for="StartDate" class="col-sm-2 control-label">Answer</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="answer">
                            <option>a</option>
                            <option>b</option>
                            <option>c</option>
                            <option>d</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" name="submit" class="btn btn-raised btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
include "footer.php";
?>

