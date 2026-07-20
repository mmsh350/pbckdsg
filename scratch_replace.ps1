$stylePath = 'c:\Users\Muhammad PC\Desktop\kad\assets\css\style.css'
$content = Get-Content -Raw -Path $stylePath

$startPattern = '\.about \{'
$endPattern = '\.history-text p \{.*?\n\}'

$regex = [regex]"(?s)$startPattern.*?$endPattern"
$content = $regex.Replace($content, $replacement)
Set-Content -Path $stylePath -Value $content
