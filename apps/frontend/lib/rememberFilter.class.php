<?php
class rememberFilter extends sfFilter
{
  public function execute($filterChain)
  {
    // Execute this filter only once
    if ($this->isFirstCall())
    {
      // Filters don't have direct access to the request and user objects.
      // You will need to use the context object to get them

      $request = $this->getContext()->getRequest();
      $user    = $this->getContext()->getUser();
      if ($request->getCookie('QuoteSite'))
      {
        // sign in
        $user->setAuthenticated(true);
      }
    }
 
    // Execute next filter
    $filterChain->execute();
  }
}