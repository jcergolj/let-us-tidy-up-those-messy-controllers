<?php

namespace App\Builders;

use Illuminate\Http\Request;

abstract class PDfBuilder
{
    protected array $payload = [];

    public function __construct(public Request $request)
    {
    }

    public function name()
    {
        $this->payload['name'] = $this->request->name;

        return $this;
    }

    public function email()
    {
        $this->payload['email'] = $this->request->email;

        return $this;
    }

    public function phone()
    {
        $this->payload['phone'] = $this->request->phone;

        return $this;
    }

    public function title()
    {
        $this->payload['title'] = $this->request->title;

        return $this;
    }

    public function age()
    {
        $this->payload['age'] = $this->request->age;

        return $this;
    }

    abstract public function build(): array;
}

class FullReportPdfBuilder extends PDfBuilder
{
    public function height()
    {
        $this->payload['height'] = $this->request->height;

        return $this;
    }

    public function build(): array
    {
        return $this->name()
            ->email()
            ->phone()
            ->title()
            ->age()
            ->height()
            ->payload;
    }
}

class BasicReportPdfBuilder extends PDfBuilder
{
    public function address()
    {
        $this->payload['address'] = $this->request->address;

        return $this;
    }

    public function build(): array
    {
        return $this->name()
            ->address()
            ->payload;
    }
}
