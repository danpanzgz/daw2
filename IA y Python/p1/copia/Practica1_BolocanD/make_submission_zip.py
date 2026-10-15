import zipfile
from pathlib import Path

base = Path(__file__).parent
zip_path = base / 'dawm2d_opia_p1.zip'
with zipfile.ZipFile(zip_path, 'w', zipfile.ZIP_DEFLATED) as z:
    # add main docs
    for name in ['dawm2d_opia_p1.pdf', 'dawm2d_opia_p1.docx', 'p1_analysis.py', 'p1_memoria.txt', 'requirements.txt', 'README.md']:
        p = base / name
        if p.exists():
            z.write(p, arcname=name)
    # add recursos
    recursos = base / 'recursos'
    if recursos.exists():
        for f in recursos.rglob('*'):
            z.write(f, arcname=str(Path('recursos') / f.relative_to(recursos)))
    # add figures
    figs = base / 'figures'
    if figs.exists():
        for f in figs.rglob('*'):
            z.write(f, arcname=str(Path('figures') / f.relative_to(figs)))

print('Created', zip_path.name)
