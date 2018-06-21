<?php

class QuestionsID_PUT_APIController__ru__Test extends Abstract_Frontend_TestCase
{
    protected $setUpDB = ['ru' => ['questions', 'revisions', 'activities'], 'users' => ['users']];

    public function testFullParams()
    {
        $queryString = 'question_title='.urlencode('Где мой новый ответ?');
        $request = $this->__getTestRequest('PUT', '/api/v1/ru/questions/12.json', $queryString, true);

        $this->app->getContainer()['request'] = $request;

        $response = $this->app->run(true);
        $responseBody = (string) $response->getBody();

        $expectedResponse = [
            'id' => 12,
            'title' => 'Где мой новый ответ?',
            'url' => 'https://octoanswers.com/ru/12/gde-moi-novyi-otvet',
            'is_redirect' => false,
        ];

        $this->assertEquals($expectedResponse, json_decode($responseBody, true));
        $this->assertSame(200, $response->getStatusCode());
    }
}
