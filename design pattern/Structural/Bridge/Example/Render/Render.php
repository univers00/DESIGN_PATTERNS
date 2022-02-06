<?php

namespace App\Render;

interface Render
{
    public function renderHeader(): string;

    public function renderTitle(string $title): string;

    public function renderTextBlock(string $text): string;

    public function renderImage(string $url): string;

    public function renderLink(string $url, string $title): string;

    public function renderFooter(): string;

    public function renderParts(array $parts): string;
}