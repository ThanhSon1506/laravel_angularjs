<div>
<form name="LoginForm" ng-submit="handelLogin(LoginForm)"> 
      <input type="text" ng-model="login.email" id="email" class="fadeIn second" name="email" placeholder="email">
      <input type="text" ng-model="login.password" id="password" class="fadeIn third" name="password" placeholder="password">
      <input type="submit" class="fadeIn fourth" value="Log In">
    </form>
    <div class="gridStyle grid" ui-grid="gridOptions" ui-grid-pagination ui-grid-edit></div>
    <div id="deltail"></div>
</div>
