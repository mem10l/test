    <h1>New Contact</h1>

    <form action="/contacts" method="post">
      @csrf
      <input type="text" name="username" id="username" placeholder="Enter your username">
      <input type="text" name="email" id="email" placeholder="Enter your Email">
      <input type="text" name="message" id="message" placeholder="Enter your Question"> 
      <input type="submit" name="create">
    </form>

    