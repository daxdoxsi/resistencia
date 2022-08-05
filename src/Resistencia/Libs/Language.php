<?php

namespace Resistencia\Libs;

class Language
{

    # Language config properties
    private array $codes;
    private array $labels;
    private string $defaultCode;
    private string $defaultLabel;
    private string $currentLangId;
    private string $currentLangCode;
    private string $currentLangLabel;
    private array $labelByCode;
    private array $idByCode;
    private bool $langDetected = false;

    /**
     * @return bool
     */
    public function isLangDetected(): bool
    {
        return $this->langDetected;
    }

    /**
     * @param bool $langDetected
     */
    public function setLangDetected(bool $langDetected): void
    {
        $this->langDetected = $langDetected;
    }

    /**
     * @return array
     */
    public function getCodes(): array
    {
        return $this->codes;
    }

    /**
     * @param array $codes
     */
    public function setCodes(array $codes): void
    {
        $this->codes = $codes;
    }

    /**
     * @return array
     */
    public function getLabels(): array
    {
        return $this->labels;
    }

    /**
     * @param array $labels
     */
    public function setLabels(array $labels): void
    {
        $this->labels = $labels;
    }

    /**
     * @return string
     */
    public function getDefaultCode(): string
    {
        return $this->defaultCode;
    }

    /**
     * @param string $defaultCode
     */
    public function setDefaultCode(string $defaultCode): void
    {
        $this->defaultCode = $defaultCode;
    }

    /**
     * @return string
     */
    public function getDefaultLabel(): string
    {
        return $this->defaultLabel;
    }

    /**
     * @param string $defaultLabel
     */
    public function setDefaultLabel(string $defaultLabel): void
    {
        $this->defaultLabel = $defaultLabel;
    }

    /**
     * @return string
     */
    public function getCurrentLangCode(): string
    {
        return $this->currentLangCode;
    }

    /**
     * @param string $currentCode
     */
    public function setCurrentLangCode(string $currentCode):void
    {
        $this->currentLangCode = $currentCode;
    }

    /**
     * @return int
     */
    public function getCurrentLangId(): int
    {
        return $this->currentLangId;
    }

    /**
     * @param int $currentId
     */
    public function setCurrentLangId(int $currentId): void
    {
        $this->currentLangId = $currentId;
    }

    /**
     * @return string
     */
    public function getCurrentLangLabel(): string
    {
        return $this->currentLangLabel;
    }

    /**
     * @param string $currentLang
     */
    public function setCurrentLangLabel(string $currentLang): void
    {
        $this->currentLangLabel = $currentLang;
    }

    /**
     * @param array $cfg_lg
     */
    public function __construct(array $cfg_lg) {

        # Lang configuration
        $this->codes = explode(',', $cfg_lg['list_codes']);
        $this->labels = explode(',', $cfg_lg['list_labels']);

        # Indexing Codes and Labels
        $this->labelByCode = array_combine($this->codes, $this->labels);
        $this->idByCode = array_combine(array_values($this->codes), array_keys($this->codes));

        # Default Code and Label
        $this->defaultCode = $cfg_lg['default_code'];
        $this->defaultLabel = $cfg_lg['default_label'];
/*
        # Defining the lang position ID and labels based on the language code
        $this->currentLangCode = $currentLangCode;
        $this->currentLangLabel = $this->labelsByCode[$currentLangCode];
        $this->currentLangId = $this->idByCode[$currentLangCode];
*/
    }

    public function t($content):string
    {
        $phrases = explode('|||', $content);
        return $phrases[$this->currentLangId] ?? $phrases[0];
    }

    /**
     * @return int
     */
    public function getIdByCode($code): int
    {
        return $this->idByCode[$code];
    }


    /**
     * @return array
     */
    public function getLabelByCode($code): array
    {
        return $this->labelByCode[$code];
    }

    /**
     * @param array $labelByCode
     */
    public function setLabelByCode(array $labelByCode): void
    {
        $this->labelByCode = $labelByCode;
    }

}