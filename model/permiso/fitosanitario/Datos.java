/**
 * 
 */
package org.sieca.everis.pdcc.model.permiso.fitosanitario;

import java.util.List;

/**
 * @author ytorregl
 *
 */
public class Datos {
	
	private String lugarEmision;
	private String fechaEmision;
	private String exportadorIdTributaria;
	private String exportadorNombre;
	private String exportadorDireccion;
	private String exportadorTelefono;
	private String exportadorEmail;
	private String exportadorTipoDocumento;
	private String importadorIdTributaria;
	private String importadorNombre;
	private String importadorDireccion;
	private String importadorTelefono;
	private String importadorEmail;
	private String importadorTipoDocumento;
	private String paisOrigen;
	private String paisDestino;
	private String puntoSalida;
	private String puntoIngreso;
	private String modalidadTransporte;
	private String empresaTransportista;
	private String identificacionTransporte;
	private String marcharmoOficial;
	private String inspeccionLugar;
	private String inspeccionFecha;
	private double periodoValidez;
	private String nombreInspector;
	private String declaracionAdicional;
	private List<Detalle> detalles;
	private TratamientoAplicado tratamientoAplicado;
	private String estado;
	/**
	 * 
	 */
	public Datos() {
		super();
		// TODO Auto-generated constructor stub
	}
	/**
	 * @param lugarEmision
	 * @param fechaEmision
	 * @param exportadorIdTributaria
	 * @param exportadorNombre
	 * @param exportadorDireccion
	 * @param exportadorTelefono
	 * @param exportadorEmail
	 * @param exportadorTipoDocumento
	 * @param importadorIdTributaria
	 * @param importadorNombre
	 * @param importadorDireccion
	 * @param importadorTelefono
	 * @param importadorEmail
	 * @param importadorTipoDocumento
	 * @param paisOrigen
	 * @param paisDestino
	 * @param puntoSalida
	 * @param puntoIngreso
	 * @param modalidadTransporte
	 * @param empresaTransportista
	 * @param identificacionTransporte
	 * @param marcharmoOficial
	 * @param inspeccionLugar
	 * @param inspeccionFecha
	 * @param periodoValidez
	 * @param nombreInspector
	 * @param declaracionAdicional
	 * @param detalles
	 * @param tratamientoAplicado
	 * @param estado
	 */
	public Datos(String lugarEmision, String fechaEmision, String exportadorIdTributaria, String exportadorNombre,
			String exportadorDireccion, String exportadorTelefono, String exportadorEmail,
			String exportadorTipoDocumento, String importadorIdTributaria, String importadorNombre,
			String importadorDireccion, String importadorTelefono, String importadorEmail,
			String importadorTipoDocumento, String paisOrigen, String paisDestino, String puntoSalida,
			String puntoIngreso, String modalidadTransporte, String empresaTransportista,
			String identificacionTransporte, String marcharmoOficial, String inspeccionLugar, String inspeccionFecha,
			double periodoValidez, String nombreInspector, String declaracionAdicional, List<Detalle> detalles,
			TratamientoAplicado tratamientoAplicado, String estado) {
		super();
		this.lugarEmision = lugarEmision;
		this.fechaEmision = fechaEmision;
		this.exportadorIdTributaria = exportadorIdTributaria;
		this.exportadorNombre = exportadorNombre;
		this.exportadorDireccion = exportadorDireccion;
		this.exportadorTelefono = exportadorTelefono;
		this.exportadorEmail = exportadorEmail;
		this.exportadorTipoDocumento = exportadorTipoDocumento;
		this.importadorIdTributaria = importadorIdTributaria;
		this.importadorNombre = importadorNombre;
		this.importadorDireccion = importadorDireccion;
		this.importadorTelefono = importadorTelefono;
		this.importadorEmail = importadorEmail;
		this.importadorTipoDocumento = importadorTipoDocumento;
		this.paisOrigen = paisOrigen;
		this.paisDestino = paisDestino;
		this.puntoSalida = puntoSalida;
		this.puntoIngreso = puntoIngreso;
		this.modalidadTransporte = modalidadTransporte;
		this.empresaTransportista = empresaTransportista;
		this.identificacionTransporte = identificacionTransporte;
		this.marcharmoOficial = marcharmoOficial;
		this.inspeccionLugar = inspeccionLugar;
		this.inspeccionFecha = inspeccionFecha;
		this.periodoValidez = periodoValidez;
		this.nombreInspector = nombreInspector;
		this.declaracionAdicional = declaracionAdicional;
		this.detalles = detalles;
		this.tratamientoAplicado = tratamientoAplicado;
		this.estado = estado;
	}
	/**
	 * @return the lugarEmision
	 */
	public String getLugarEmision() {
		return lugarEmision;
	}
	/**
	 * @param lugarEmision the lugarEmision to set
	 */
	public void setLugarEmision(String lugarEmision) {
		this.lugarEmision = lugarEmision;
	}
	/**
	 * @return the fechaEmision
	 */
	public String getFechaEmision() {
		return fechaEmision;
	}
	/**
	 * @param fechaEmision the fechaEmision to set
	 */
	public void setFechaEmision(String fechaEmision) {
		this.fechaEmision = fechaEmision;
	}
	/**
	 * @return the exportadorIdTributaria
	 */
	public String getExportadorIdTributaria() {
		return exportadorIdTributaria;
	}
	/**
	 * @param exportadorIdTributaria the exportadorIdTributaria to set
	 */
	public void setExportadorIdTributaria(String exportadorIdTributaria) {
		this.exportadorIdTributaria = exportadorIdTributaria;
	}
	/**
	 * @return the exportadorNombre
	 */
	public String getExportadorNombre() {
		return exportadorNombre;
	}
	/**
	 * @param exportadorNombre the exportadorNombre to set
	 */
	public void setExportadorNombre(String exportadorNombre) {
		this.exportadorNombre = exportadorNombre;
	}
	/**
	 * @return the exportadorDireccion
	 */
	public String getExportadorDireccion() {
		return exportadorDireccion;
	}
	/**
	 * @param exportadorDireccion the exportadorDireccion to set
	 */
	public void setExportadorDireccion(String exportadorDireccion) {
		this.exportadorDireccion = exportadorDireccion;
	}
	/**
	 * @return the exportadorTelefono
	 */
	public String getExportadorTelefono() {
		return exportadorTelefono;
	}
	/**
	 * @param exportadorTelefono the exportadorTelefono to set
	 */
	public void setExportadorTelefono(String exportadorTelefono) {
		this.exportadorTelefono = exportadorTelefono;
	}
	/**
	 * @return the exportadorEmail
	 */
	public String getExportadorEmail() {
		return exportadorEmail;
	}
	/**
	 * @param exportadorEmail the exportadorEmail to set
	 */
	public void setExportadorEmail(String exportadorEmail) {
		this.exportadorEmail = exportadorEmail;
	}
	/**
	 * @return the exportadorTipoDocumento
	 */
	public String getExportadorTipoDocumento() {
		return exportadorTipoDocumento;
	}
	/**
	 * @param exportadorTipoDocumento the exportadorTipoDocumento to set
	 */
	public void setExportadorTipoDocumento(String exportadorTipoDocumento) {
		this.exportadorTipoDocumento = exportadorTipoDocumento;
	}
	/**
	 * @return the importadorIdTributaria
	 */
	public String getImportadorIdTributaria() {
		return importadorIdTributaria;
	}
	/**
	 * @param importadorIdTributaria the importadorIdTributaria to set
	 */
	public void setImportadorIdTributaria(String importadorIdTributaria) {
		this.importadorIdTributaria = importadorIdTributaria;
	}
	/**
	 * @return the importadorNombre
	 */
	public String getImportadorNombre() {
		return importadorNombre;
	}
	/**
	 * @param importadorNombre the importadorNombre to set
	 */
	public void setImportadorNombre(String importadorNombre) {
		this.importadorNombre = importadorNombre;
	}
	/**
	 * @return the importadorDireccion
	 */
	public String getImportadorDireccion() {
		return importadorDireccion;
	}
	/**
	 * @param importadorDireccion the importadorDireccion to set
	 */
	public void setImportadorDireccion(String importadorDireccion) {
		this.importadorDireccion = importadorDireccion;
	}
	/**
	 * @return the importadorTelefono
	 */
	public String getImportadorTelefono() {
		return importadorTelefono;
	}
	/**
	 * @param importadorTelefono the importadorTelefono to set
	 */
	public void setImportadorTelefono(String importadorTelefono) {
		this.importadorTelefono = importadorTelefono;
	}
	/**
	 * @return the importadorEmail
	 */
	public String getImportadorEmail() {
		return importadorEmail;
	}
	/**
	 * @param importadorEmail the importadorEmail to set
	 */
	public void setImportadorEmail(String importadorEmail) {
		this.importadorEmail = importadorEmail;
	}
	/**
	 * @return the importadorTipoDocumento
	 */
	public String getImportadorTipoDocumento() {
		return importadorTipoDocumento;
	}
	/**
	 * @param importadorTipoDocumento the importadorTipoDocumento to set
	 */
	public void setImportadorTipoDocumento(String importadorTipoDocumento) {
		this.importadorTipoDocumento = importadorTipoDocumento;
	}
	/**
	 * @return the paisOrigen
	 */
	public String getPaisOrigen() {
		return paisOrigen;
	}
	/**
	 * @param paisOrigen the paisOrigen to set
	 */
	public void setPaisOrigen(String paisOrigen) {
		this.paisOrigen = paisOrigen;
	}
	/**
	 * @return the paisDestino
	 */
	public String getPaisDestino() {
		return paisDestino;
	}
	/**
	 * @param paisDestino the paisDestino to set
	 */
	public void setPaisDestino(String paisDestino) {
		this.paisDestino = paisDestino;
	}
	/**
	 * @return the puntoSalida
	 */
	public String getPuntoSalida() {
		return puntoSalida;
	}
	/**
	 * @param puntoSalida the puntoSalida to set
	 */
	public void setPuntoSalida(String puntoSalida) {
		this.puntoSalida = puntoSalida;
	}
	/**
	 * @return the puntoIngreso
	 */
	public String getPuntoIngreso() {
		return puntoIngreso;
	}
	/**
	 * @param puntoIngreso the puntoIngreso to set
	 */
	public void setPuntoIngreso(String puntoIngreso) {
		this.puntoIngreso = puntoIngreso;
	}
	/**
	 * @return the modalidadTransporte
	 */
	public String getModalidadTransporte() {
		return modalidadTransporte;
	}
	/**
	 * @param modalidadTransporte the modalidadTransporte to set
	 */
	public void setModalidadTransporte(String modalidadTransporte) {
		this.modalidadTransporte = modalidadTransporte;
	}
	/**
	 * @return the empresaTransportista
	 */
	public String getEmpresaTransportista() {
		return empresaTransportista;
	}
	/**
	 * @param empresaTransportista the empresaTransportista to set
	 */
	public void setEmpresaTransportista(String empresaTransportista) {
		this.empresaTransportista = empresaTransportista;
	}
	/**
	 * @return the identificacionTransporte
	 */
	public String getIdentificacionTransporte() {
		return identificacionTransporte;
	}
	/**
	 * @param identificacionTransporte the identificacionTransporte to set
	 */
	public void setIdentificacionTransporte(String identificacionTransporte) {
		this.identificacionTransporte = identificacionTransporte;
	}
	/**
	 * @return the marcharmoOficial
	 */
	public String getMarcharmoOficial() {
		return marcharmoOficial;
	}
	/**
	 * @param marcharmoOficial the marcharmoOficial to set
	 */
	public void setMarcharmoOficial(String marcharmoOficial) {
		this.marcharmoOficial = marcharmoOficial;
	}
	/**
	 * @return the inspeccionLugar
	 */
	public String getInspeccionLugar() {
		return inspeccionLugar;
	}
	/**
	 * @param inspeccionLugar the inspeccionLugar to set
	 */
	public void setInspeccionLugar(String inspeccionLugar) {
		this.inspeccionLugar = inspeccionLugar;
	}
	/**
	 * @return the inspeccionFecha
	 */
	public String getInspeccionFecha() {
		return inspeccionFecha;
	}
	/**
	 * @param inspeccionFecha the inspeccionFecha to set
	 */
	public void setInspeccionFecha(String inspeccionFecha) {
		this.inspeccionFecha = inspeccionFecha;
	}
	/**
	 * @return the periodoValidez
	 */
	public double getPeriodoValidez() {
		return periodoValidez;
	}
	/**
	 * @param periodoValidez the periodoValidez to set
	 */
	public void setPeriodoValidez(double periodoValidez) {
		this.periodoValidez = periodoValidez;
	}
	/**
	 * @return the nombreInspector
	 */
	public String getNombreInspector() {
		return nombreInspector;
	}
	/**
	 * @param nombreInspector the nombreInspector to set
	 */
	public void setNombreInspector(String nombreInspector) {
		this.nombreInspector = nombreInspector;
	}
	/**
	 * @return the declaracionAdicional
	 */
	public String getDeclaracionAdicional() {
		return declaracionAdicional;
	}
	/**
	 * @param declaracionAdicional the declaracionAdicional to set
	 */
	public void setDeclaracionAdicional(String declaracionAdicional) {
		this.declaracionAdicional = declaracionAdicional;
	}
	/**
	 * @return the detalles
	 */
	public List<Detalle> getDetalles() {
		return detalles;
	}
	/**
	 * @param detalles the detalles to set
	 */
	public void setDetalles(List<Detalle> detalles) {
		this.detalles = detalles;
	}
	/**
	 * @return the tratamientoAplicado
	 */
	public TratamientoAplicado getTratamientoAplicado() {
		return tratamientoAplicado;
	}
	/**
	 * @param tratamientoAplicado the tratamientoAplicado to set
	 */
	public void setTratamientoAplicado(TratamientoAplicado tratamientoAplicado) {
		this.tratamientoAplicado = tratamientoAplicado;
	}
	/**
	 * @return the estado
	 */
	public String getEstado() {
		return estado;
	}
	/**
	 * @param estado the estado to set
	 */
	public void setEstado(String estado) {
		this.estado = estado;
	}
	

	
	

}
